<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */   
    public function test_example()
    {
        
        Auth::loginUsingId(24);   
        
        $response = $this->call('GET', '/admin/build/back', [
            'year'    => 2023,
            'mounth'  => [1, 2],
            'variant' => 5,
        ]);
        
        dd($response['info']);

    }
}
