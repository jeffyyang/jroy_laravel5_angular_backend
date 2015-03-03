<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('123456'),
            'created_at'  => new Datetime,
            'updated_at'  => new Datetime
        ));
    }

}
