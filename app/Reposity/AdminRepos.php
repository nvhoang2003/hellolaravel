<?php

namespace App\Reposity;
use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmin() {
        $sql = 'select a.username, a.contact, a.email ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.username';

        return DB::select ($sql);
    }

    public static function getAdminById($username){
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.username = ? ';

        return DB::select($sql, [$username]);
    }

    public static function insert($admin){
        $sql = 'insert into admin ';
        $sql .= '(username, contact, email, PASSWORD) ';
        $sql .= 'values (?, ?, ?, ?) ';

        $result =  DB::insert($sql, [$admin->username, $admin->contact, $admin->email, $admin->password]);
        if($result){
            return DB::getAdmin()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update(object $admin){
        $sql = 'update admin ';
        $sql .= 'set contact = ?, email = ?, PASSWORD = ?';
        $sql .= 'where username = ? ';

        DB::update($sql, [$admin->contact, $admin->email, $admin->password, $admin->username]);

    }
}

