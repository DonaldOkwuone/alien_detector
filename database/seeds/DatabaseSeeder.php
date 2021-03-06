<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Record;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

        // $this->call(UsersTableSeeder::class);
    	$this->call('RecordsTableSeeder');

        Model::unguard();
    }
}
