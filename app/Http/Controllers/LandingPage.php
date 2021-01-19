<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index() {
        $data=[
            'title'=>'selamat datang di website kami',
            'subTitle' => 'silakan ditelusuri dulu',
        ];
        return view('landingpage.index', [
            'data'=>$data,
        ]);
    }
}
