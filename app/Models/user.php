<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class user extends Model
{
    
    protected $connection = 'mysql';
    protected $table = 'user';
    protected $fillable = ['u_id','u_name','u_password'];
    
}
