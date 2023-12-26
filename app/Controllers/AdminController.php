<?php

namespace App\Controllers;

use \App\Libraries\Hash;

class AdminController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'help']);
    }
    public function register()
    {
        if ($this->request->getMethod() == 'get') {
            return view('auth/registration');
        } else if ($this->request->getMethod() == 'post') {
            // echo 'form submision code';
            // Validate the form
            $validation = $this->validate([
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Your Email is required',
                        'valid_email' => 'You must enter a valid email'
                    ]

                ],
                'phone' => [
                    'rules' => 'required|integer|max_length[10]',
                    'errors' => [
                        'required' => 'Contact No. is Required',
                        'integer' => 'Your Contact No. must be an integer',
                        'max_length[10]' => 'Your Contact No. must have 10 digits number'
                    ]
                ],
                'password' => [
                    'rules' => 'required|max_length[12]|min_length[6]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must have atleast 6 characters in length',
                        'max_length' => 'Password must not have more that 12 characters in length'
                    ]
                ],
                'cpassword' => [
                    'rules' => 'required|min_length[6]|max_length[12]|matches[password]',
                    'errors' => [
                        'required' => 'Confirm Password is required',
                        'min_length' => 'Password must have atleast 6 characters in length',
                        'max_length' => 'Password must not have more that 12 characters in length',
                        'matches' => 'Your password should be match with entered Password'
                    ]

                ],
            ]);
            if (!$validation) {
                // echo "All feilds are required";
                return view('auth/registration', ['validation' => $this->validator]);
            } else {
                // echo "form submitted";
                $email = $this->request->getPost('email');
                $phone = $this->request->getPost('phone');
                $password = $this->request->getPost('password');

                $values = [
                    'email' => $email,
                    'phone' => $phone,
                    'password' => Hash::enc_pass($password)
                ];
                // echo "form submit";
                $registerModel = new \App\Models\AdminModel();
                $query = $registerModel->insert($values);
                if (!$query) {
                    // echo "Form not submitted ";
                    return redirect()->back()->with('fail', 'Something went Wrong!');
                } else {
                    // echo "Form submitted";
                    // return redirect()->to(base_url('admin_dashboard'));
                    return redirect()->back()->with('success', 'Registered Successfully!');
                }
            }
        }
    }

    public function login()
    {
        if ($this->request->getMethod() == 'get') {
            return view('auth/login');
        } else if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Your Email is required',
                        'valid_email' => 'You must enter a valid email'
                    ]

                ],
                'password' => [
                    'rules' => 'required|max_length[12]|min_length[6]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must have atleast 6 characters in length',
                        'max_length' => 'Password must not have more that 12 characters in length'
                    ]
                ]
            ]);
            if (!$validation) {
                // echo "All feilds are required";
                return view('auth/login', ['validation' => $this->validator]);
            } else {
                // login code
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $loginModel = new \App\Models\AdminModel();
                $user_data = $loginModel->where('email', $email)->first();
                $check_password = Hash::pass_verify($password, $user_data['password']);

                // Check password and password match then redirect
                if (!$check_password) {
                    // echo "password wrong";
                    return redirect()->back()->withInput();
                } else {
                    // Logged in
                    if (!is_null($user_data)) {
                        $session_data = [
                            'user_id' => $user_data['id'],
                            'email' => $user_data['email'],
                            'loggedin' => 'loggedin'
                        ];
                        session()->set($session_data);
                    }

                    return redirect()->to(base_url('admin_dashboard'));
                }
            }
        }
    }

    public function logout()
    {
        session_unset();
        session()->destroy();
        return redirect()->to(base_url());
    }
    public function admin_dashboard()
    {
        return view('admin/admin_dashboard');
    }
}