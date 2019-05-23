<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Validator;

class UserController extends Controller
{

    public function _actionPostUserList()
    {

        $users = User::orderBy('created_at', 'desc');
        if (!empty($this->request['keyword'])) {
            $users->where('firstname', 'like', '%' . $this->request['keyword'] . '%')
                ->orWhere('lastname', 'like', '%' . $this->request['keyword'] . '%')
                ->orWhere('username', 'like', '%' . $this->request['keyword'] . '%');
        }
        $this->response['pagination']=$users->select([  '_id','username','email','firstname','lastname','type','status','created_at','updated_at'])
            ->paginate(1);
        return $this->response;
    }

}

