<?php

namespace App\Http\Controllers\App;

use App\Models\History;
use App\Models\Store;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Validator;

class AppController extends Controller
{
    public function index()
    {


            return view('dashboard');

    }

    public function _actionPostLogin()
    {
        if (!empty($this->request['phone']) && !empty($this->request['password'])) {
            $user = User::with('store'
            )->where('phone', $this->request['phone'])
                ->where('password', $this->request['password'])
                // ->where('status','active')
//                ->select(['_id,store'])
                ->first();
            if (!empty($user)) {
                $user->password = null;
                $this->response['user'] = $user;
                $this->response['isLogin'] = true;
            } else {
                $this->response['isLogin'] = false;
                $this->response['success'] = false;
            }
            $this->response['isLogin'] = false;
            return $this->response;
        }
        $this->response['success'] = false;
        return $this->response;
    }

    public function _actionPostLoginFacebook()
    {
        if (!empty($this->request['id'])) {
            $user = new User();
            $user_existing = User::where('u_id', $this->request['id'])->first();
            if (empty($user_existing)) {
                $user->u_id = $this->request['id'];
                $user->name = $this->request['name'];
                $user->store_id = null;
                $user->status = 'active';
                $user->account_type = 'client';
                $user->created_at = time();
                $user->updated_at = time();
                $user->save();
                $this->response['user'] = $user;
            } else {
                $this->response['user'] = $user_existing;
            }

            $this->response['success'] = true;
        }
        return $this->response;
    }

    public function _actionPostRegister()
    {


        $rule = [
            'phone' => 'required|numeric',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
        ];
        $validator = validator::make($this->request, $rule);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors(),
                'errors' => true,
            ]);
        }
        try {
            $store = new Store();
            $this->response['store'] = false;
            if ($this->request['account_type']) {
                $store->phone = $this->request['store_phone'];
                $store->name = $this->request['store_name'];
                $store->star_1 = 0;
                $store->star_2 = 0;
                $store->star_3 = 0;
                $store->star_4 = 0;
                $store->star_5 = 0;
                $store->point = 100;
                $store->address = (!empty($this->request['store_address'])) ? $this->request['store_address'] : null;
                $store->latitude = $this->request['latitude'];
                $store->longitude = $this->request['longitude'];
                $store->status = 'inactive';
                $store->created_at = time();
                $store->updated_at = time();
                $store->save();
                $this->response['store'] = true;
            }
            $user_insert = [];

            if (!empty($store->id)) {

                $user = User::saveUser($this->request, $store->id);
            } else {

                $user = User::saveUser($this->request);
            }

            $user->password = null;
            if (!empty($store)) {
                $user->store = $store;
            }
            $this->response['user'] = $user;

        } catch (\Exception $e) {
            $this->response['errors'] = true;
            $this->response['message'] = $e;
            $this->response['success'] = false;
        }
        return $this->response;
    }


    //getStore
    public function _actionPostStore()
    {
        $store = Store::with('user')->where('status', 'active')->get();
        $this->response['data'] = $store;
        return $this->response;
    }

    //comment store
    public function _actionPostCommentStore()
    {
        $request = $this->request['data'];
        // return $this->response;
        if (!empty($request['store_id']) && !empty($request['user_id'])) {
            $comment = new Comment();
            $comment->store_id = $request['store_id'];
            $comment->user_id = $request['user_id'];
            $comment->description = $request['description'];
            $comment->status = 'publish';
            $comment->created_at = time();
            $comment->updated_at = time();
            $comment->save();
            $this->response['success'] = true;
        }
        return $this->response;

    }

    //comment store
    public function _actionPostListComment()
    {
        $request = $this->request['data'];

        if (!empty($request['store_id'])) {
            $comments = Comment::with(['user' => function ($q) {
                $q->select('name');
            }])->where('store_id', '5c8ab4eb9ac473080711ad67')->get();
            $this->response['comments'] = $comments;
            $this->response['success'] = true;
        }
        return $this->response;

    }



    //list Statistical
    public function _actionPostStatistical()
    {
        $request = $this->request['data'];

        if (!empty($request['store_id'])) {
            $histories = History::with(['user'])->where('store_id',$request['store_id'])->orderBy('created_at','desc')->get();
            $balance_month = 0;
            $point_increase_month = 0;
            $point_decrease_month = 0;
            $balance_week = 0;
            $point_increase_week = 0;
            $point_decrease_week = 0;
            $statistical_month = History::where('store_id',$request['store_id'])->where('created_at', '>=', strtotime(Carbon::now()->subMonth()))->get();
            foreach ($statistical_month as $item) {
                $balance_month += $item->total_balance - $item->total_after_balance;
                if($item->status == 'successfully'){
                    $point_increase_month += $item->after_point - $item->point;
                }else{
                    $point_decrease_month += $item->point - $item->after_point;
                }
            }
            $this->response['month']['balances'] = $balance_month;
            $this->response['month']['point_increase'] = $point_increase_month;
            $this->response['month']['point_decrease'] = $point_decrease_month;
            $this->response['month']['count_order'] = count($statistical_month);
            $statistical_week = History::where('store_id',$request['store_id'])->where('created_at', '>=', strtotime(Carbon::now()->subWeek()))->get();
            foreach ($statistical_week as $item) {
                $balance_week += $item->total_balance - $item->total_after_balance;
                if($item->status == 'successfully'){
                    $point_increase_week += $item->after_point - $item->point;
                }else{
                    $point_decrease_week += $item->point - $item->after_point;
                }
            }
            $this->response['week']['balances'] = $balance_week;
            $this->response['week']['point_increase'] = $point_increase_week;
            $this->response['week']['point_decrease'] = $point_decrease_week;
            $this->response['week']['count_order'] = count($statistical_week);
            // }


            $this->response['histories'] = $histories;
         }
        return $this->response;
    }

}

