<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudController extends BaseController
{
    public function index()
    {
        return view('studs/list');
    }

    public function createStuds()
    {
        return view('studs/add');
    }

    public function storeStuds()
    {
   
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
