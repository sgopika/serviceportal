<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Documenttype;
use App\Story;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('refreshCaptcha');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function refreshCaptcha()

    {
      
        return response()->json(['captcha'=> captcha_img()]);

    }



}
