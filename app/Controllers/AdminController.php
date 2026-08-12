<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    // Fixed Admin Login Details
    private string $adminEmail = 'admin@safetrack.com';
    private string $adminPassword = 'Admin@123';

    
    public function login()
    {
        // Already logged in as admin
        if (session()->get('admin_logged_in') === true) {
            return redirect()->to('/admin/dashboard');
        }

        return view('admin/login');
    }

   
    public function checkLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (
            $email === $this->adminEmail &&
            $password === $this->adminPassword
        ) {
            session()->set([
                'admin_logged_in' => true,
                'admin_email' => $this->adminEmail
            ]);

            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Invalid admin email or password.');
    }

   
    private function checkAdminAuth()
    {
        if (session()->get('admin_logged_in') !== true) {
            return redirect()->to('/admin/login');
        }

        return null;
    }

    
    public function dashboard()
    {
        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== null) {
            return $authCheck;
        }

        $userModel = new \App\Models\UserModel();
        $incidentModel = new \App\Models\IncidentModel();

        $data = [
            'totalUsers' => $userModel->countAllResults(),
            'totalIncidents' => $incidentModel->countAllResults(),
        ];

        if (class_exists('\App\Models\HelpdeskModel')) {
            $helpdeskModel = new \App\Models\HelpdeskModel();
            $data['totalHelpdesks'] = $helpdeskModel->countAllResults();
        } else {
            $data['totalHelpdesks'] = 0;
        }

        return view('admin/dashboard', $data);
    }

    
    public function users()
    {
        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== null) {
            return $authCheck;
        }

        $userModel = new \App\Models\UserModel();

     
        $users = $userModel
            ->select('id, name, email')
            ->findAll();

        return view('admin/users', [
            'users' => $users
        ]);
    }

    
    public function incidents()
    {
        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== null) {
            return $authCheck;
        }

        $incidentModel = new \App\Models\IncidentModel();

        $incidents = $incidentModel->findAll();

        return view('admin/incidents', [
            'incidents' => $incidents
        ]);
    }

    
    public function incidentDetails($id)
    {
        $authCheck = $this->checkAdminAuth();

        if ($authCheck !== null) {
            return $authCheck;
        }

        $incidentModel = new \App\Models\IncidentModel();

        $incident = $incidentModel->find($id);

        if (!$incident) {
            return redirect()->to('/admin/incidents')
                ->with('error', 'SOS incident not found.');
        }

        return view('admin/incident_details', [
            'incident' => $incident
        ]);
    }

    
    public function logout()
    {
        session()->remove([
            'admin_logged_in',
            'admin_email'
        ]);

        return redirect()->to('/admin/login')
            ->with('success', 'Admin logged out successfully.');
    }
}