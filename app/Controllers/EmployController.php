<?php 
namespace App\Controllers;
use App\Models\EmployModel;
use CodeIgniter\Controller;
class EmployController extends Controller
{
    // show employ list
    public function employ(){
        $employModel = new EmployModel();
        $data['employs'] = $employModel->orderBy('id', 'DESC')->findAll();
        return view('employ_view', $data);
    }

    // add employ form
    public function employform(){
        return view('employ_add');
    }
 
    // insert data
    public function storeemploy() {
        $employModel = new EmployModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'phone'  => $this->request->getVar('phone'),
            'age'  => $this->request->getVar('age'),
            'designation'  => $this->request->getVar('designation'),
        ];
        $employModel->insert($data);
        return $this->response->redirect(site_url('/employ-list'));
    }

    // show single employ
    public function singleUser($id = null){
        $userModel = new EmployModel();
        $data['employ_obj'] = $userModel->where('id', $id)->first();
        return view('employ_view', $data);
    }
    // update employ data
    public function update(){
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
        return $this->response->redirect(site_url('/employs-list'));
    }
 
    // delete employ
    public function delete($id = null){
        $employModel = new EmployModel();
        $data['employs'] = $employModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/employs-list'));
    }    
}