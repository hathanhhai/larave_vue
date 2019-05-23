<?php

namespace App\Models;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
class User extends Eloquent
{
    protected $collection = "users";
    public $timestamps = false;
    protected $fillable = [
       '_id','username','email','firstname','lastname','type','status','created_at','updated_at'
    ];


    public function store(){
        return $this->hasOne(Store::class,'_id','store_id');
    }

    public static function saveUser($data=[],$store_id=''){
            $user = new User();
            if (!empty($store_id)) {
                $user->store_id = $store_id;
            }
            $user->name= $data['name'];
            $user->phone= $data['phone'];
            $user->email= $data['email'];
            $user->account_balance= $data['account_balance'];
            $user->password= $data['password'];
            $user->created_at= time();
            $user->updated_at= time();
            if(!empty($store_id)){
                $user->status= 'inactive';
                $user->account_type= 'store';
            }else{
                $user->account_type= 'client';
                $user->status= 'active';
            }

            $user->updated_at= time();
            $user->save();
            return $user;
    }



}
