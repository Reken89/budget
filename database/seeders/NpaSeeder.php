<?php

namespace Database\Seeders;

use App\Structure\DeloSection\User\Models\Npa;
use Illuminate\Database\Seeder;

class NpaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Npa::insert([
            [
                'title' => 'Распоряжение',
            ],
            [
                'title' => 'Приказ',
            ],
            [
                'title' => 'Постановление',
            ],
            [
                'title' => 'Решение сессии',
            ],
            [
                'title' => 'Справка',
            ],
            [
                'title' => 'Письмо',
            ],   
            [
                'title' => 'Уведомление',
            ], 
        ]);
     
    }
}
