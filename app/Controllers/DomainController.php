<?php

namespace App\Controllers;

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
        $user_list = new \App\Models\AdminModel();
        $users = $user_list->findAll();
        return view('admin/user_list', ['users'=>$users]);
    }

    public function domain_info(){
        return view('admin/domain_info');
    }
}

