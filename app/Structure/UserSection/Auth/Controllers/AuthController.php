<?php

namespace App\Structure\UserSection\Auth\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
     /**
     * Выполняем выход из приложения Laravel
     * Выполняем сброс сессии и токена
     * Перенаправляем на страницу авторизации
     *
     * @param Request $request
     * @return 
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
   
}

