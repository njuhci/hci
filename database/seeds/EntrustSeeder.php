<?php

use Illuminate\Database\Seeder;
use App\Role;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name         = 'admin';
        $role->display_name = '系统管理员';
        $role->save();

        $role = new Role();
        $role->name         = 'doctor';
        $role->display_name = '医生';
        $role->save();

        $role = new Role();
        $role->name         = 'coach';
        $role->display_name = '教练';
        $role->save();

        $role = new Role();
        $role->name         = 'user';
        $role->display_name = '用户';
        $role->save();
    }
}
