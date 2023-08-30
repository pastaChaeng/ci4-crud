<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudModel;

class StudController extends BaseController
{
    public function index()
    {
        $fetchStuds = new StudModel();
        $data ['studs'] = $fetchStuds->findAll();

        return view('studs/list', $data);
    }

    public function createStuds()
    {
       
        $data['stud_id'] = '20-' .uniqid();
        return view('studs/add', $data);
    }

    public function storeStuds()
    {
        $insertStud = new StudModel();

        if($img = $this->request->getFile('studprofile')){
            if ($img->isValid() && ! $img->hasMoved()){
                $imgName = $img->getRandomName();
                $img->move('uploads/', $imgName);
            }
        }

        $data = array(
            'stud_name' =>$this->request->getPost('studname'),
            `stud_id`=>$this->request->getPost('studid'),
            `stud_section` =>$this->request->getPost('studsection'),
            `stud_course` =>$this->request->getPost('studcourse'),
            `stud_grade_lvl` =>$this->request->getPost('studgradelvl'),
            `stud_profile` => $imgName,
        );

        $insertStud->insert($data);

        return redirect()->to('/studs')->with('success', 'Student created account successfully');
    }

    public function editStuds($id)
    {
        return view('studs/edit');
    }

    public function updateStuds($id)
    {
   
    }

    public function deleteStuds($id)
    {
      
    }
}
