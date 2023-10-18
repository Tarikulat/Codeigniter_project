<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\BookModel;
use App\Models\RoomModel;
use App\Models\EmployModel;

class Master extends BaseController
{
    public function dash()
        {
            // Below to Dashboard Counter
            $users = new UserModel(); 
            $data['user'] =$users->get()->getNumRows();

            $books = new BookModel();
            $data['book'] = $books->get()->getNumRows();

            $room = new RoomModel();
           $data['room'] = $room->get()->getNumRows();

           

           $employ = new EmployModel();
           $data['employs'] = $employ->get()->getNumRows();



            return view('master', $data);
        }

}