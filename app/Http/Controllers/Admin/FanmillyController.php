<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FanmillyController extends Controller
{
    //
    public function home()
  {
      return view('admin.fanmilly.home');
  }
  
   public function chat()
  {
      return view('admin.fanmilly.chat');
      
  }
   public function mypage()
  {
      return view('admin.fanmilly.mypage');
  }
}
