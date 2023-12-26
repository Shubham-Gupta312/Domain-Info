<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'help']);
    }
    public function index(): string
    {
        return view('welcome_message');
    }
    public function add_detail()
    {
        if ($this->request->getMethod() == 'get') {
            return view('form');
        } else if ($this->request->getMethod() == 'post') {
            // echo "form submit";
            // VALIDATE FORM 
            $validation = $this->validate([
                'domainName' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Name is required',
                    ]
                ],
                'domainExpdate' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Expiry Date is required',
                    ]
                ],
                'domainCost' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Cost is required',
                    ]
                ],
                'sellingCost' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Selling Cost is required',
                    ]
                ],
                'domainProvider' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Provider is required',
                    ]
                ],
                'domainRegdate' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Registration Date is required',
                    ]
                ],
                'email' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Email is required',
                    ]
                ],
                'phone' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Contact No. is required',
                    ]
                ],
                'company' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Company Name is required',
                    ]
                ],
                'renewalDate' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Renewal Date is required',
                    ]
                ],
                'space' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Total No. of Space is required',
                    ]
                ],
                'expDate' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hosting Expiry Date is required',
                    ]
                ],
                'hostingCost' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hosting Cost is required',
                    ]
                ],
                'hostingSpace' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Hosting Space is required',
                    ]
                ],
                'domain_Name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Domain Name is required',
                    ]
                ],
                'ssl_expDate' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'SSL Expiry date is required',
                    ]
                ],
                'cost' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'SSL Cost is required',
                    ]
                ],
            ]);
            if (!$validation) {
                // echo "All feilds are Required";
                return view('form', ['validation' => $this->validator]);
            } else {
                // echo "Form submit code";
                $domainName = $this->request->getPost('domainName');
                $domainExp = $this->request->getPost('domainExpdate');
                $domainCost = $this->request->getPost('domainCost');
                $sellingCost = $this->request->getPost('sellingCost');
                $domainProvider = $this->request->getPost('domainProvider');
                $domainRegst = $this->request->getPost('domainRegdate');
                $email = $this->request->getPost('email');
                $phone = $this->request->getPost('phone');
                $company = $this->request->getPost('company');
                $domainRenew = $this->request->getPost('renewalDate');
                $hostSpace = $this->request->getPost('space');
                $hostExp = $this->request->getPost('expDate');
                $hostingCost = $this->request->getPost('hostingCost');
                $hostingSpace = $this->request->getPost('hostingSpace');
                $domain_Name = $this->request->getPost('domain_Name');
                $sslExp = $this->request->getPost('ssl_expDate');
                $sslCost = $this->request->getPost('cost');

                $values = [
                    'domainName' => $domainName,
                    'domainExpdate' => $domainExp,
                    'domainCost' => $domainCost,
                    'sellingCost' => $sellingCost,
                    'domainProvider' => $domainProvider,
                    'domainRegdate' => $domainRegst,
                    'email' => $email,
                    'phone' => $phone,
                    'company' => $company,
                    'renewalDate' => $domainRenew,
                    'space' => $hostSpace,
                    'expDate' => $hostExp,
                    'hostingCost' => $hostingCost,
                    'hostingSpace' => $hostingSpace,
                    'domain_Name' => $domain_Name,
                    'ssl_expDate' => $sslExp,
                    'cost' => $sslCost
                ];

                $domainForm = new \App\Models\DomainModel();
                $query = $domainForm->insert($values);

                // Send data to DB
                if(!$query){
                    // echo "Something went Wrong!";
                    return redirect()->back()->with('fail', 'Something went Wrong!');
                }else{
                    // echo "Form Submitted";
                    return redirect()->to(base_url());
                }
            }

        }
    }
}