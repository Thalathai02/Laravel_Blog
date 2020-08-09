<?php

namespace App\Imports;

use App\reg_std;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new reg_std([
            'id'  => $row[0],
            'std_code'   => $row[1],
            'name'   => $row[2],
            'nick_name'    => $row[3],
            'phone'  => $row[4],
            'lineId'   => $row[5],
            'email'  => $row[6],
            'facebook'  => $row[7],
            'address'  => $row[8],
            'parent_name'  => $row[9],
            'parent_phone'  => $row[10],
            'user'  => $row[11],
            'password'  => $row[12]
        ]);
    }
}
