<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    public function allData()
    {
        return DB::table('admins')->get();
    }

    public function detailData($id)
    {
        return DB::table('admins')->where('id', $id)->first();
    }

    public function addData($data)
    {
        DB::table('admins')->insert($data);
    }

    public function editData($id, $data)
    {
        DB::table('admins')
        ->where('id', $id)
        ->update($data);
    }

    public function deleteData($id)
    {
        DB::table('admins')
            ->where('id', $id)
            ->delete();
    }
}
