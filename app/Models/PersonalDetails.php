<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;
    protected $table = 'personal_details';
    protected $fillable = ['name ','email ', 'contact ','PresentLocation','PreferedLocation','EducationDetails','collageEducation','stream','passedOutYear','cgp','collegeName','city'];
}
