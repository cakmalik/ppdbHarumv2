<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirm extends Model
{
    use HasFactory;
    protected $table = "confirms";

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
