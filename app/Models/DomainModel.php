<?php

namespace App\Models;

use CodeIgniter\Model;

class DomainModel extends Model
{
    // ...
    protected $primaryKey = 'id';
    protected $table = 'domain_detail';
    protected $allowedFields = [
        'domainName',
        'domainExpdate',
        'domainCost',
        'sellingCost',
        'domainProvider',
        'domainRegdate',
        'email',
        'phone',
        'company',
        'renewalDate',
        'space',
        'expDate',
        'hostingCost',
        'hostingSpace',
        'domain_Name',
        'ssl_expDate',
        'cost'
    ];
}