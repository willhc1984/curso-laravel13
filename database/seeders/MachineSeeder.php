<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::firstOrCreate(
            ['name' => 'Machine 1'],
            ['is_active' => true]
        );

         Machine::firstOrCreate(
            ['name' => 'Machine 2'],
            ['is_active' => true]
        );

         Machine::firstOrCreate(
            ['name' => 'Machine 3'],
            ['is_active' => true]
        );
    }
}
