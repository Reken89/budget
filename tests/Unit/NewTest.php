<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Communal\CommunalController;

class NewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
        
        Auth::loginUsingId(3);
        
        $controller = new CommunalController();
        $data = $controller->index(2022);
        var_dump($data);
    }
    
}
