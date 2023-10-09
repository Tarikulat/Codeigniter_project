<?php 
namespace App\Controllers;
use App\Models\BookModel;
use CodeIgniter\Controller;
class Book extends Controller
{
    // show users list
    public function index(){
        $userModel = new BookModel();
        $data['book'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('book_view', $data);
    }
    
    // add user form
    public function create(){
        return view('book_add');
    }
 
    // insert data
    public function store() {
        $userModel = new BookModel();

        $data = [
            'address' => $this->request->getPost('address'),
            'roomtype' => $this->request->getPost('roomtype'),
            'guests' => $this->request->getPost('guests'),
            'first' => $this->request->getPost('first'),
            'last' => $this->request->getPost('last'),
            'contract' => $this->request->getPost('contract'),
            'arridate' => $this->request->getPost('arridate'),
            'arritime' => $this->request->getPost('arritime'),
            'depdate' => $this->request->getPost('depdate'),
            'deptime' => $this->request->getPost('deptime'),
            'stay'  => $this->request->getPost('stay'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/book-form'));
    }
    // show single user
    public function singleUser($id){
        $userModel = new BookModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('book_edit', $data);
    }
    // update user data
    public function update($id){
        $userModel = new BookModel();
        $data = [
            'address' => $this->request->getPost('address'),
            'roomtype' => $this->request->getPost('roomtype'),
            'guests' => $this->request->getPost('guests'),
            'first' => $this->request->getPost('first'),
            'last' => $this->request->getPost('last'),
            'contract' => $this->request->getPost('contract'),
            'arridate' => $this->request->getPost('arridate'),
            'arritime' => $this->request->getPost('arritime'),
            'depdate' => $this->request->getPost('depdate'),
            'deptime' => $this->request->getPost('deptime'),
            'stay'  => $this->request->getPost('stay'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/book-list'));
    }
 
    // delete user
    public function delete($id){
        $userModel = new BookModel();
        $data['book'] = $userModel->where('id', $id)->delete($id);
        return redirect()->to('/book-list');
    }    
}