<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GroupPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('group_permission')->insertGetId([
            'name' => 'admin'
        ]);

        DB::table('permission')->insert([
            'name' => 'Super admin',
            'code' => 'super_admin',
            'group_id' => $id,
        ]);

        $id2 = DB::table('group_permission')->insertGetId([
            'name' => 'Danh sách tài khoản'
        ]);

        DB::table('permission')->insert(
            [
                'name' => 'Danh sách tài khoản',
                'code' => 'admin.account.getList',
                'group_id' => $id2,
            ]
        );
        DB::table('permission')->insert(
            [
                'name' => 'Tạo tài khoản',
                'code' => 'admin.account.getCreate,admin.account.postCreate',
                'group_id' => $id2,
            ]
        );

        $id3 = DB::table('group_permission')->insertGetId([
            'name' => 'Quản lý nhóm quyền',
        ]);

        DB::table('permission')->insert(
            [
                'name' => 'Danh sách nhóm quyền',
                'code' => 'admin.permission.getList',
                'group_id' => $id3,
            ]
        );
        DB::table('permission')->insert(
            [
                'name' => 'Tạo nhóm quyền',
                'code' => 'admin.permission.getCreate,admin.permission.postCreate',
                'group_id' => $id3,
            ]
        );
    }
}
