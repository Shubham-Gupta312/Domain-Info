<?php

namespace App\Controllers;
use App\Models\AdminModel;

class DomainController extends BaseController
{

    public function domain_list()
    {
        // echo "Domain";
        $domain_list = new \App\Models\DomainModel();
        $domain = $domain_list->findAll();
        return view('admin/domain_list', ['domain'=>$domain]);
    }

    public function user_list()
    {
        $user_list = new AdminModel();
        $users = $user_list->findAll();
        return view('admin/user_list', ['users'=>$users]);
    }

    public function remove($id = null)
    {
        $deleteUser = new AdminModel();
        $deleteUser->delete($id);
        return redirect()->to(base_url('user_list'));
    }

    public function domain_info($id = null){
        $domModel = new \App\Models\DomainModel();

        $data['domain_detail'] = $domModel->find($id);
        return view('admin/domain_info', $data);
    }
}

