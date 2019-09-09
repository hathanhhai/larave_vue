<?php

namespace App\Http\Controllers\Admins\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Validator;

class AUserController extends Controller
{

    public function index(){
        return view("admins.pages.users.index");
    }
    public function _actionGetUserList()
    {

        $users = User::orderBy('created_at', 'desc');
        if (!empty($this->request['keyword'])) {
            $users->where('firstname', 'like', '%' . $this->request['keyword'] . '%')
                ->orWhere('lastname', 'like', '%' . $this->request['keyword'] . '%')
                ->orWhere('username', 'like', '%' . $this->request['keyword'] . '%');
        }
        $this->response['pagination']=$users->select([  '_id','username','email','firstname','lastname','type','status','created_at','updated_at'])
            ->paginate(10);
        return $this->response;
    }
    

}

