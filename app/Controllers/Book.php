<?php 
namespace App\Controllers;
use App\Models\BookModel;
use CodeIgniter\Controller;
use App\Models\RoomType; //for roomtype dropdown
use App\Models\person;   //for person dropdown

class Book extends Controller
{
    // show users list
    public function index(){
        $userModel = new BookModel();
        $data['book'] = $userModel
        ->join('roomcatagory','roomcatagory.room_id = book.roomtype')  //tablerelation ...rk_hs roomcatagory(table)
        ->join('person','person.person_id = book.guests')

        ->orderBy('id', 'DESC')->findAll();  //rk_hs 
        return view('book_view', $data);
    }
    
    // add user form
    public function create(){
        $type = new RoomType();
        $data['roomtype'] = $type->findAll();

        $person = new person();
        $data['person'] = $person->findAll();

        return view('book_add',$data);
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
    // show single user for booking...Edit
    public function singleUser($id){
        $userModel = new BookModel();
        $data['book_obj'] = $userModel->where('id', $id)->first();

        $type = new RoomType();              //dropdown rk_sh 
        $data['roomtype'] = $type->findAll();

        $person = new person();               //dropdown rk_sh 
        $data['person'] = $person->findAll();

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
            'status'  => $this->request->getPost('status')
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/book-list'));
    }
 
    //Single Print
    public function singleprint($id){
        $userModel = new BookModel();
        $data['book'] = $userModel->where('id', $id)->first();
        return view('book_print', $data);
    }
    // delete user
    public function delete($id){
        $userModel = new BookModel();
        $data['book'] = $userModel->where('id', $id)->delete($id);
        return redirect()->to('/book-list');
    }    
}