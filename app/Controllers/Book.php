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
            'name' => $this->request->getPost('name'),
            'contract'  => $this->request->getPost('contract'),
            'date'  => $this->request->getPost('date'),
            'time'  => $this->request->getPost('time'),
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
            'name' => $this->request->getVar('name'),
            'contract'  => $this->request->getVar('contract'),
            'date'  => $this->request->getVar('date'),
            'time'  => $this->request->getVar('time'),
            'stay'  => $this->request->getVar('stay'),
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