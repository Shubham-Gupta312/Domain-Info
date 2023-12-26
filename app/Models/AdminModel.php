<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    // ...
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $allowedFields = [
        'email',
        'phone',
        'password'
    ];
}