<?php

namespace App\Controllers;

use App\Models\HelpdeskModel;

class HelpdeskController extends BaseController
{
    public function index()
    {
        return view('helpdesk');
    }

    public function search()
    {
        $model = new HelpdeskModel();

        $pincode = $this->request->getPost('pincode');

        $data['helpdesks'] = $model
            ->where('pincode', $pincode)
            ->findAll();

        return view('helpdesk', $data);
    }

    public function api($pincode)
    {
        $model = new HelpdeskModel();

        $helpdesk = $model
            ->where('pincode', $pincode)
            ->first();

        return $this->response->setJSON($helpdesk);
    }
}