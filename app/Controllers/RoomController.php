<?php 
namespace App\Controllers;
use App\Models\RoomModel;
use CodeIgniter\Controller;
use App\Models\RoomaddModel; //for roomaddModel dropdown





class RoomController extends Controller
{
    // show room list..View
    public function listroom(){
        $roomModel = new RoomModel();
        $data['rooms'] = $roomModel->orderBy('id', 'DESC')->findAll(); //for join

        return view('room_view', $data);
    }
    // add room form...Add
    public function formroom(){
        $catatype = new RoomaddModel();
        $data['category'] = $catatype->findAll();

        return view('room_add', $data);
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
        
    }


    // show single room ...room_edit file...
    public function singleUser($id = null){
        $roomaddModel = new RoomaddModel();
        $data['rooms'] = $roomaddModel->where('id', $id)->first();

        // $catatype = new RoomaddModel();              //dropdown rk_sh 
        // $data['category'] = $catatype->findAll();

        return view('room_edit', $data);
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
        return redirect()->to('/rooms-list');
    }    
}