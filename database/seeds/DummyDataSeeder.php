<?php

use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $half = 1;
        $year = date('Y');
        $registrationMin = intval($year . $half) * 100000;

        $userWalter = \App\User::create([
            'name' => 'José Walter de Souza Neto',
            'email' => 'netonneettoo@gmail.com',
            'password' => 'default'
        ]);

        $studentWalter = \App\Student::create([
            'user_id' => $userWalter->getAttribute('id'),
            'registration' => rand($registrationMin, $registrationMin + 99999),
            'status' => 'active'
        ]);

        //
    }
}
