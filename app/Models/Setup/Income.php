<?php

namespace App\Models\Setup;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $table= "incomes";

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
