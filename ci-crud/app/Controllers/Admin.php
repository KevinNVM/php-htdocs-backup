<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotificationsModel;
use Config\Services;

class Admin extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home'];
        return view('admin/index', $data);
    }

    public function notifCenter()
    {
        $start = hrtime(true);
        $NotificationsModel = new NotificationsModel();
        $end = hrtime(true);
        $eta = $end - $start;
        $eta /= 1e+9;
        $eta .= ' seconds';

        $data = [
            'title' => 'Notifications Center',
            'notifs' => $NotificationsModel->getAll(),
            'time' => $eta,
            'session' => session(),
            'validation' => Services::validation(),
        ];
        return view('admin/notifcenter', $data);
    }

    public function getNotif($id)
    {
        $start = hrtime(true);
        $NotificationsModel = new NotificationsModel();
        $notif = $NotificationsModel->getById($id);
        $end = hrtime(true);
        $eta = $end - $start;
        $eta /= 1e+9;
        $eta .= ' seconds';
        $data = [
            'title' => $notif->notif_head.' Notification Detail',
            'time' => $eta,
            'notif' => $notif,
        ];

        return view('admin/notiflist', $data);
    }

    public function newNotification()
    {
        $request = Services::request();
        // dd($request->getVar('notif_head'), $request->getVar('notif_body'));
        $head = $request->getVar('notif_head');
        $body = $request->getVar('notif_body');

        if(!$this->validate([
            'notif_head' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'The "Title" Field Cannot Be Empty!',
                    'max_length' => 'The "Title" Field Is Too Long, Max Length: 50'
                ]
            ],
            'notif_body' => [
                'rules' => 'required|max_length[1000]',
                'errors' => [
                    'required' => 'The "Messages" Field Cannot Be Empty!',
                    'max_length' => 'The "Messages" Field Is Too Long, Max Length: 1000'
                ]
            ]
        ])) {
            return redirect()->to('admin/notifications_center')->withInput()->with('msg', ['head'=>'Failed!', 'body'=>'Failed To Add New Notification!, Invalid Input', 'status'=>'error']);
        }

        $NotificationsModel = new NotificationsModel();
        $NotificationsModel->setNotif($head, $body);

        return redirect()->to('admin/notifications_center')->with('msg', ['head'=>'Success!', 'body'=>'Added New Notification', 'status'=>'success']);
    }

    public function delNotif($id)
    {
        $NotificationsModel = new NotificationsModel();
        $NotificationsModel->unsetNotif($id);

        return redirect()->to('admin/notifications_center')->with('msg', ['head'=>'Success!', 'body'=>'Notifications Deleted', 'status'=>'success']);

    }

    public function emptyNotifs()
    {
        $NotificationsModel = new NotificationsModel();
        $NotificationsModel->empty();

        return redirect()->to('admin/notifications_center')->with('msg', ['head'=>'Success!', 'body'=>'Deleted All Notifications', 'status'=>'success']);
    }

    public function userList()
    {
        $start = hrtime(true);
        // 
        $adminModel = model('AdminModel', false);
        $result = $adminModel->getAllUser();
        // 
        $end = hrtime(true);
        $eta = $end - $start;
        $eta /= 1e+9;
        $eta .= ' seconds';

        $data = [
            'title' => "User List",
            "users" => $result,
            'time'  => $eta,
        ];

        return view('admin/userlist', $data);
    }

    public function detail($id)
    {
        $request = \Config\Services::request();
        $http_request = hash('sha256', 'HTTP_AJAX');
        if ( !empty($request->getGET()) && $request->getGET()[hash('sha256', "request")] === $http_request ) {
            $start = hrtime(true);
            // 
            $adminModel = model('AdminModel', false);
            $query = $adminModel->getUser($id);
            // 
            $end = hrtime(true);
            $eta = $end - $start;
            $eta /= 1e+9;
            $eta .= ' seconds';
    
            $data = [
                'user' => $query->getResult(),
            ];
            
            return view('admin/detail', $data);
        
        } else {
            return redirect()->to('admin/userlist')->with('msg', ['head'=>'Error 403', 'body'=>'No Direct Script Access Allowed', 'status'=>'error']);
        }
    }
    
    public function delete($id)
    {
        
        $start = hrtime(true);
        // 
        $adminModel = model('AdminModel');
        $result = $adminModel->deleteUser($id);
        // 
        $end = hrtime(true);
        $eta = $end - $start;
        $eta /= 1e+9;
        $eta .= ' seconds';
        
        $session = session();
        if (!$result) {
            $status = 'error';
            $head = 'Failed';
            $body = $adminModel->db->error;
        } else {
            $status = 'success';
            $head = 'Success';
            $body = 'Delete Success';
        }

        return redirect()->to('/admin/userlist')->with('msg', ['status'=>$status, 'head'=>$head, 'body'=>$body]);

        
    }

    public function editUser($id)
    {
        $adm = model('AdminModel', false);
        $adm->editUser($id);

        return redirect()->to('/admin/userlist')->with('msg', ['status'=>'success', 'head'=>'Success!', 'body'=>'User Profile Has Been Changed']);
    }


}