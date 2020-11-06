<?php

namespace App\Models;

use App\Models\Setup\Income;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function confirm()
    {
        return $this->hasOne(confirm::class);
    }
    public function income()
    {
        $this->hasOne(Income::class,'category');
    }
}
