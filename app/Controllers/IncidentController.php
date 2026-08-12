<?php

namespace App\Controllers;

use App\Models\IncidentModel;

class IncidentController extends BaseController
{
    public function index()
    {
        return view('sos');
    }

    public function save()
    {
        $model = new IncidentModel();

        $sessionUser = session()->get('user');

        $user = $sessionUser['name'] ?? 'User';
        $userEmail = $sessionUser['email'] ?? '';

        $latitude = $this->request->getPost('latitude');
        $longitude = $this->request->getPost('longitude');
        $pincode = $this->request->getPost('pincode');

        $model->insert([
            'user_name' => $user,
            'latitude'  => $latitude,
            'longitude' => $longitude,
            'pincode'   => $pincode,
            'message'   => 'SOS Alert'
        ]);

        $email = \Config\Services::email();

        $email->setTo($userEmail);
        $email->setSubject('🚨 SafeTrack SOS Alert');

        $email->setMessage("
            <h2>🚨 SOS Alert Received</h2>

            <p><b>User Name :</b> {$user}</p>

            <p><b>Latitude :</b> {$latitude}</p>

            <p><b>Longitude :</b> {$longitude}</p>

            <p><b>Message :</b> SOS Alert Triggered Successfully.</p>
        ");

        if ($email->send()) {
            $msg = 'SOS Alert Sent Successfully';
        } else {
            $msg = $email->printDebugger(['headers']);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => $msg
        ]);
    }


    public function history()
    {
        $model = new IncidentModel();

        $sessionUser = session()->get('user');

        if (!$sessionUser) {
            return redirect()->to('/login');
        }

        $userName = $sessionUser['name'] ?? '';

        $data['incidents'] = $model
            ->where('user_name', $userName)
            ->findAll();

        return view('history', $data);
    }


    public function delete($id)
    {
        $model = new IncidentModel();

        $sessionUser = session()->get('user');

        if (!$sessionUser) {
            return redirect()->to('/login');
        }

        $userName = $sessionUser['name'] ?? '';

        $incident = $model
            ->where('id', $id)
            ->where('user_name', $userName)
            ->first();

        if ($incident) {
            $model->delete($id);
        }

        return redirect()->to('/history');
    }
}