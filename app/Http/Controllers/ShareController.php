<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class ShareController extends Controller
{
    public function index(){
       $social_share =  Share::page('pagelink','text')
       ->facebook()
       ->twitter()
       ->linkedin()
       ->whatsapp()
       ->telegram();
    }
}
