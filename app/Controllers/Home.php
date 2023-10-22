<?php

namespace App\Controllers;
use App\Models\RoomModel;

class Home extends BaseController
{
    public function index()
    {
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->orderBy('id', 'DESC')->findAll(); //for join        
        return view('front/page/home',$data);
    }

    public function fabout()
    {
        $data=[
            'page_title'=>'About Us',
        ];
            return view('front/page/about',$data);
    }

    public function fservice()
    {
        $data=[
            'page_title'=>'Service',
        ];
        return view('front/page/service',$data);
    }

    public function froom()
    {
        $data=[
            'page_title'=>'room',
        ];
        return view('front/page/room',$data);
    }

    public function fteam()
    {
        $data=[
            'page_title'=>'team',
        ];
        return view('front/page/team',$data);
    }
    public function fcontact()
    {
        $data=[
            'page_title'=>'contact',
        ];
        return view('front/page/contact',$data);
    }

   
}
