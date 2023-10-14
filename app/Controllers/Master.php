<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\BookModel;

class Master extends BaseController
{
    public function dash()
        {

            $users = new UserModel();
            $data['user'] =$users->get()->getNumRows();

            $books = new BookModel();
            $data['book'] = $books->get()->getNumRows();



            return view('master', $data);
        }

}