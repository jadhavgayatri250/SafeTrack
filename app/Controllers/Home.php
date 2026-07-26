<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function saveIncident()
    {
        $db = Database::connect();

        $data = [
            'user_name' => 'User',
            'latitude'  => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude'),
            'pincode'   => $this->request->getPost('pincode'),
            'message'   => 'SOS Alert'
        ];

        $db->table('incidents')->insert($data);

        return $this->response->setJSON([
            'status' => 'success'
        ]);
    }
}