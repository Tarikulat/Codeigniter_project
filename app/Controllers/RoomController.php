<?php 
namespace App\Controllers;
use App\Models\RoomModel;
use CodeIgniter\Controller;
class RoomController extends Controller
{
    // show room list
    public function listroom(){
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->orderBy('id', 'DESC')->findAll();
        return view('room_view', $data);
    }
    // add room form
    public function formroom(){
        return view('room_add');
    }
 
    // insert data
    public function storeroom() {
        $roomModel = new RoomModel();
        $data = [
            'room' => $this->request->getVar('room'),
            'category'  => $this->request->getVar('category'),
            'available'  => $this->request->getVar('available'),
            'cost'  => $this->request->getVar('cost'),
        ];
        $roomModel->insert($data);
        return $this->response->redirect(site_url('/rooms-list'));
        // print_r($data);
        // $roomModel->insert($data);
        // return $this->response->redirect(site_url('/rooms-list'));
    }


    // show single room
    public function singleUser($id = null){
        $roomModel = new RoomModel();
        $data['room_obj'] = $roomModel->where('id', $id)->first();
        return view('edit_view', $data);
    }
    // update room data
    public function update(){
        $roomModel = new RoomModel();
        $id = $this->request->getVar('id');
        $data = [
            'room' => $this->request->getVar('room'),
            'category'  => $this->request->getVar('category'),
            'available'  => $this->request->getVar('available'),
            'cost'  => $this->request->getVar('cost'),
        ];
        $roomModel->update($id, $data);
        return $this->response->redirect(site_url('/rooms-list'));
    }
 
    // delete room
    public function delete($id = null){
        $roomModel = new RoomModel();
        $data['room'] = $roomModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/rooms-list'));
    }    
}