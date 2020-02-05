<?php

use Illuminate\Database\Seeder;
use App\Device;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::insert([
            'id' => 1,
	        'name' => 'Zubiri-Manteo',
            'latitude' => 43.327363,
            'longitude' => -1.970753,
            'user_id' => 3
        ]);
        Device::insert([
            'id' => 2,
	        'name' => 'Urgul',
            'latitude' => 43.324959, 
            'longitude' => -1.988826,
            'user_id' => 3
        ]);
        Device::insert([
            'id' => 3,
	        'name' => 'Santa clara',
            'latitude' => 43.32154,
            'longitude' => -1.999147,
            'user_id' => 1
        ]);
        Device::insert([
            'id' => 4,
	        'name' => 'Dispositivo Fernando',
            'latitude' => 43.316779,
            'longitude' => -1.981573,
            'user_id' => 2
        ]);
    }
}