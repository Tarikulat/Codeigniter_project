<?php 
namespace App\Controllers;
use App\Models\EmployModel;
use App\Models\EmpCata;

use CodeIgniter\Controller;


class EmployController extends Controller{


    //............show employ list.............
    public function employ(){
        $employModel = new EmployModel();
        $data['employs'] = $employModel
        ->join('empcata','empcata.cata_id = employs.designation')
        ->orderBy('id', 'DESC')->findAll();
        return view('employ_view', $data);
        }


    //................add employ form.............
    public function employform(){
        $EmpCata = new EmpCata();
        $data['EmpCata'] = $EmpCata->orderBy('cata_id', 'DESC')->findAll();

        return view('employ_add',$data);
        }
 
    //...........insert data..................
    public function storeemploy() {
        $employModel = new EmployModel();
        $file = $this->request->getFile('file');
        $fileName = $file->getRandomName();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'age'  => $this->request->getVar('age'),
            'designation'  => $this->request->getVar('designation'),
            'image' => $fileName,
        ];
        $file->move('uploads/img',$fileName);
        $employModel->insert($data);
        return $this->response->redirect(site_url('/employ_view'));
        }


    //...........show single employ...............
    public function edit($id = null){
        $userModel = new EmployModel();
        $data['employ_obj'] = $userModel->where('id', $id)->first();
        return view('employ_edit', $data);
        }



    //............update employ data................
    public function updateemploy(){
        $employModel = new EmployModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'age'  => $this->request->getVar('age'),
            'designation'  => $this->request->getVar('designation'),
        ];
        $employModel->update($id, $data);
        return redirect()->to('employ_view');
        }
 

    //............delete employ................
    public function delete($id = null){
        $employModel = new EmployModel();
        $data['employs'] = $employModel->where('id', $id)->delete($id);
        return redirect()->to('employ_view');
        }    
}