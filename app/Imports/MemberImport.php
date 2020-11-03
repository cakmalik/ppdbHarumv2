<?php

namespace App\Imports;

use App\Member;
use Illuminate\Support\Facades\Hash;
use App\Models\Member as ModelsMember;
use Maatwebsite\Excel\Concerns\ToModel;

class MemberImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ModelsMember([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'password' => \Hash::make($row['password']),
        ]);
    }
}
