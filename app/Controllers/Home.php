<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
		// return view ('header');
		return view('login');
    }

    public  function singUp(){

        return view('singup');
    }

    //--------------------------------------------------------------------

}
