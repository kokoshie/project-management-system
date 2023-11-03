<?php

namespace App\Models\Projects;

use App\Models\MainTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable = ["name","status","start_date","end_date"];


}
