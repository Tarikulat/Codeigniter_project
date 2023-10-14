<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\EmployModel;
use App\Models\BookModel;

class CountContraller extends BaseController  //no needs file
{
    public function index()
        {
        //    $uesrs = new UserModel();
        //    $data['count'] = $uesrs->get()->getNumRows();

           $books = new BookModel();
           $data['book'] = $books->get()->getNumRows();
           
        //    $result = $books->select('sum(booking) as sumQuantities');
        //    $data['sum'] = $result['sumQuantities'];
           
        //    $employ = new EmployModel();
        //    $data['count'] = $employ->get()->getNumRows();
           
           
           
           
            return view('master', $data);
        }

}