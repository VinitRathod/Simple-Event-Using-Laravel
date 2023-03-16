<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoutLogs extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'created_at',
        'updated_at'
    ];
}
