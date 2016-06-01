<?php

$admin_role = DB::table('roles')
                                ->select('id')
                                ->where('name', 'admin')
                                ->first()
                                ->id;
$user_role = DB::table('roles')
                                ->select('id')
                                ->where('name', 'user')
                                ->first()
                                ->id;

$now = date('Y-m-d H:i:s');

return array(
        'table' => 'users',

        array(
                'username'   => 'kevinAdmin',
                'password'          => Hash::make('test'),
                'email' => 'kevin@admin.com',
                'created_at' => $now,
                'updated_at' => $now,
                'role_id'          => $admin_role
        ),

        array(
                'username'   => 'mary',
                'password'          => Hash::make('test'),
                'email' => 'kevin@user.com',
                'created_at' => $now,
                'updated_at' => $now,
                'role_id'          => $user_role
        ),

);