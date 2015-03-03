<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

	public function initSetting()
	{
		DB::table('setting')->insert([
			['key'=>'global_title', 'value'=>'zAdmin'],
			['key'=>'global_keyword', 'value'=>'zAdmin'],
			['key'=>'global_description', 'value'=>'zAdmin']
		]);
	}

}
