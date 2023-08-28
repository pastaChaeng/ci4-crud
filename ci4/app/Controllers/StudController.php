<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudController extends BaseController
{
    public function index($id)
    {
        return view('stud/list');
    }

    public function createStud($id)
    {
        return view('stud/add');
    }

    public function storeStud($id)
    {
   
    }

    public function editStud($id)
    {
        return view('stud/edit');
    }

    public function deleteStud($id)
    {
      
    }
}
