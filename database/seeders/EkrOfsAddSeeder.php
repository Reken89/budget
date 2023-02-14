<?php

namespace Database\Seeders;

use App\Structure\OfsSection\User\Models\Ekr;
use Illuminate\Database\Seeder;

class EkrOfsAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id из таблицы users
        $users = [
            3, 4, 5, 6, 7, 8,
            9, 10, 11, 12, 13,
            14, 15, 16, 17, 18,
            19, 20, 21, 22, 23,
            25, 26, 27, 28, 29
            ];
 
        $ekr = Ekr::create([
            'shared' => 'No',
            'main'   => 'No',
            'number' => 23,
            'ekr'    => 263,
            'title'  => 'Продуктовые пакеты (питание школьников)',
        ]);
        
        foreach ($users as $user) {
            for ($mounth = 1; $mounth < 13; $mounth++){
                for ($chapter = 1; $chapter < 6; $chapter++){
                    $ekr->ofs()->create([
                        'user_id'          => $user,
                        'year'             => 2023,
                        'mounth'           => $mounth,
                        'chapter'          => $chapter,
                        'status'           => 2,
                        'lbo'              => 0,
                        'prepaid'          => 0,
                        'credit_year_all'  => 0,
                        'credit_year_term' => 0,
                        'debit_year_all'   => 0,
                        'debit_year_term'  => 0,
                        'fact_all'         => 0,
                        'fact_mounth'      => 0,
                        'kassa_all'        => 0,
                        'kassa_mounth'     => 0,
                        'credit_end_all'   => 0,
                        'credit_end_term'  => 0,
                        'debit_end_all'    => 0,
                        'debit_end_term'   => 0,
                        'return_old_year'  => 0, 
                    ]);
                }
            }                                             
        }
    }       
}

