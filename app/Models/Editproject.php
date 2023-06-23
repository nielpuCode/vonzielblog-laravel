<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editproject extends Model
{
    use HasFactory;

    protected $fillable = ['imageProject', 'projectTitle', 'projectLink', 'projectDesc', 'user_id'];
}
