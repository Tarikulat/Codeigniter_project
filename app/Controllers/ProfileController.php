<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller  //login for connect
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}