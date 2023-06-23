<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editeducation extends Model
{
    use HasFactory;

    protected $fillable = ['iconEdu', 'titleEdu', 'nameEdu', 'linkEdu', 'user_id'];
}
