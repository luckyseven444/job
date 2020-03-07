<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    protected $primaryKey = 'flight_id';
    protected $fillable = ['job_title','job_description','salary','location','country', 'user_id'];
}
