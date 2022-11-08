<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */   
    public function test_example()
    {
        /*
        $response = $this->call('POST', '/api/budget/public/contact', [
            'name'            => 'Reken',
            'email'           => 'reken@mail.ru',
            'mobile_number'   => 123456789,
            'subject'         => 'Тема сообщения',
            'message'         => 'Текст',
        ]);
         * 
         */

        //$response->assertJson(['status' => true]);        
        //dd($response->baseResponse->exception);
        
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}

