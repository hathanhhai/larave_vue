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
        return view("admins.pages.index",$this->dataSendView);
    }

    

}

