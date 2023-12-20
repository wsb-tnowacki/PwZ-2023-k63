<?php

namespace Database\Seeders;

use App\Models\Posty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

       /*  User::factory()->create(
            [
                'name' => 'tester',
                'email' => 'test@ww.pl',
                'password' => password_hash('tester', PASSWORD_DEFAULT)
            ]
            );
            User::factory()->create(
                [
                    'name' => 'tester2',
                    'email' => 'test@wp.pl',
                    'password' => password_hash('tester', PASSWORD_DEFAULT)
                ]
                );
                User::factory()->create(
                    [
                        'name' => 'tester3',
                        'email' => 'test@w.pl',
                        'password' => password_hash('tester', PASSWORD_DEFAULT)
                    ]
                    );
                    User::factory()->create(
                        [
                            'name' => 'admin',
                            'email' => 'admin@wsb.poznan.pl',
                            'password' => password_hash('Tester1234', PASSWORD_DEFAULT)
                        ]
                        ); */
            Posty::factory(37)->create();
    }
}
