<?php

namespace App\Http\Controllers\Admins\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Validator;

class AHomeController extends Controller
{

    public function index(){
        // return 3;
        $this->dataSendView['breacrumd']="Dashboard";
        if(!empty($this->request['code'])){

     
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://oauth.zaloapp.com/v3/access_token?app_id=1458440198570780125&app_secret=OU6SzjW8Sk4WWp7QdO4k&code='.$this->request['code'], ['auth' =>  ['user', 'pass']]);
      //654009394860055736
      //w8GPLpmYzZ_jZHHREIJ_CE2A5LuqEg4pWViF6HK2kmos_LWN6Xda4SpmUoP83EOSdj0CU0eXissAyJzP7ZQJNPFWS6066yXJaCH7IqbisbEUk3bZ6LE8UB3_874U1OvalgCN2Xf7kW-oxoia11ItBDRTAHXd4PbsrlyoJq8IWd6GwnXTEnoQQf2l0aD6I8jpaFjdVm0zxLERoszMEMR4UBAXMnGLMSnulh4a4YfDiZknlIqeQKAu5lce1nrNGQeCuhSY8NH5m1p0bLaBS6UqRrX1uPxRN3eqypy
        $data=  json_decode($res->getBody()->getContents(),true);
        $res_friend = $client->get('https://graph.zalo.me/v2.0/me/invitable_friends?access_token='.$data['access_token'].'&from=0&limit=1000&fields=id,name,gender,picture', ['auth' =>  ['user', 'pass']]);
        $res_friend_result =  json_decode($res_friend->getBody()->getContents(),true);
            $message = "Test send zalo with  zalo access_token: ".$data['access_token'];
            $idfriend = "5134738335217009641";
           
        $send_message = $client->post('https://graph.zalo.me/v2.0/me/message?access_token='.$data['access_token'].'&message='.$message.'&to='.$idfriend);
        // $send_message = $client->post('https://graph.zalo.me/v2.0/me/message?access_token=w8GPLpmYzZ_jZHHREIJ_CE2A5LuqEg4pWViF6HK2kmos_LWN6Xda4SpmUoP83EOSdj0CU0eXissAyJzP7ZQJNPFWS6066yXJaCH7IqbisbEUk3bZ6LE8UB3_874U1OvalgCN2Xf7kW-oxoia11ItBDRTAHXd4PbsrlyoJq8IWd6GwnXTEnoQQf2l0aD6I8jpaFjdVm0zxLERoszMEMR4UBAXMnGLMSnulh4a4YfDiZknlIqeQKAu5lce1nrNGQeCuhSY8NH5m1p0bLaBS6UqRrX1uPxRN3eqypy&message=teo&link=https://developers.zalo.me/&to=5134738335217009641');
        $send_message_result=  json_decode($send_message->getBody()->getContents(),true);
       
    }else{
        return view('admins.pages.index',$this->dataSendView);
    }
        return $this->jsonReponse($send_message_result);

    //    $res_friend_result
    }

    public function _actionGetLoginZalo(){
        $client = new \GuzzleHttp\Client();
    
        $res = $client->get('https://oauth.zaloapp.com/v3/auth?app_id=1458440198570780125&redirect_uri=http://laravel.test/dashboard/main&state=1', ['auth' =>  ['user', 'pass']]);
        echo $res->getStatusCode(); // 200
        echo $res->getBody(); // { "type": "User", ....
            // $_SESSION['login_zalo'] = $res->$res->getBody();
           
            
        // return 3;
    }
    

}

