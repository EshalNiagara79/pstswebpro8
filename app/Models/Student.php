<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama','jekel','kelas','alamat','tanggal_lahir'];
}
