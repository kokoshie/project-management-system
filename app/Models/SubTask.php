<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\MainTest;
class SubTask extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function mainTask()
    {
        return $this->belongsTo(MainTest::class);
    }
}
