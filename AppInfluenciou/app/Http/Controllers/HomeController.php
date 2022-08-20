<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        switch (Auth::user()->roles[0]->name) {
            case 'admin':
                    return redirect()->route('dashboard.admin.index');
                break;
            
            case 'aluno':
                    return redirect()->route('dashboard.aluno.index');
                break;

            case 'instrutor':
                    return redirect()->route('dashboard.instrutor.index');
                break;

            default:
                Auth::logout();
                return redirect()->route('login');
        }
    }
}
