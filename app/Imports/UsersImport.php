<?php

namespace App\Imports;

use App\Http\Controllers\RoleController;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel
{

    private $id_role;

    public function __construct($id_role)
    {
        $this->id_role = $id_role;
    }
    /** 
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row[0]);



        $user = new User([
            'name' => $row[0],
            'email' => $row[1],
            'password' => Hash::make($row[1])
        ]);

        $user->save();


        return RoleController::setRole($user, [$this->id_role]);
    }
}
