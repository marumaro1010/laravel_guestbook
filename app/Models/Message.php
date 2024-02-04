<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $connection = 'mysql';
    protected $table = 'message';
    public const CREATED_AT = 'm_add_datetime';
    public const UPDATED_AT = 'm_mod_datetime';
    protected $fillable = ['m_uid','m_text'];
}
