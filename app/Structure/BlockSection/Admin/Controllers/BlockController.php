<?php

namespace App\Structure\BlockSection\Admin\Controllers;

use App\Core\Controllers\Controller;

class BlockController extends Controller
{
    /**
     * Отрисовка блок листа
     *
     * @param 
     * @return 
     */
    public function index()
    {       
        return view('block.block');
    }
    
}
