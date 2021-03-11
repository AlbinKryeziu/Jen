<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterClientRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('jen/pages/register');
    }

    public function indexClient(){
        return view('jen/pages/registerClient');
    }

    public function registerClient(RegisterClientRequest $request){

        return $request;

    }
}
