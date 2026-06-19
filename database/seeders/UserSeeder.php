<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Exception;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Try{
            User::firstOrCreate(
            ['name' => 'Admin'],
                [
                    'email' => 'admin@example.com',
                    'password' => Hash::make('12345678'),
                ]
            );

            User::firstOrCreate(
            ['name' => 'Admin2'],
                [
                    'email' => 'admin2@example.com',
                    'password' => Hash::make('123'),
                ]
            );
            User::firstOrCreate(
            ['name' => 'Admin5'],
                [
                    'email' => 'admin5@example.com',
                    'password' => Hash::make('123'),
                ]
            );
            User::firstOrCreate(
            ['name' => 'Admin3'],
                [
                    'email' => 'admin3@example.com',
                    'password' => Hash::make('123'),
                ]
            );
            User::firstOrCreate(
            ['name' => 'Admin4'],
                [
                    'email' => 'admin4@example.com',
                    'password' => Hash::make('123'),
                ]
            );
        }catch(Exception $e){
                Log::notice('Erro ao criar usuário: ',['error' => $e->getMessage()]);
            }
        
    }
}
