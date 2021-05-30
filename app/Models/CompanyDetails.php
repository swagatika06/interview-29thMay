<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;
    protected $table = 'personal_details';
    protected $fillable = ['CompanyName ','role', 'JoiningDate ','Skills'];
}
