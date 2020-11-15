<?php

namespace App\Models;

use App\Models\Setup\Income;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ="students";

    public function confirm()
    {
        return $this->hasOne(confirm::class);
    }
    public function gaji()
    {
        return $this->hasOne(Income::class);
    }
    public function size()
    {
        return $this->hasOne(Size::class);
    }
    public function jadwal()
    {
        return $this->hasOne(Schedule::class);
    }
}
