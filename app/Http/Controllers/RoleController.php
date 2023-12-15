<?php

namespace App\Http\Controllers;

use App\models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RoleController extends Controller
{
    //

    public static function getRole(User $user)
    {
        $id = $user->id;
        $roles_ids = DB::table("user_data_type")->where("user_id", $id)->pluck("data_type_id");
        $roles_names = DB::table("table_globals")->whereIn("id", $roles_ids)->pluck("data_cat");
        return $roles_names;
    }

    public static function setRole(User $user, array $role_ids)
    {
        $id = $user->id;

        $insertData = collect($role_ids)->map(function ($role_id) use ($id) {
            return ['user_id' => $id, 'data_type_id' => $role_id];
        })->toArray();


        // dd([$insertData, $role_ids]);
        DB::table('user_data_type')->insert($insertData);
    }
}
