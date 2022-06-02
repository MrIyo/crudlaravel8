<?php

namespace App\Imports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;

class AdminImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $admin)
    {
        return new Admin([
            'nama' => $admin[1],
            'jeniskelamin' => $admin[2],
            'notelpon' => $admin[3],
            'foto' => $admin[4],
            'email' => $admin[5],
            'email_verified_at' => $admin[6],
            'password' => $admin[7],
        ]);

    }
}
