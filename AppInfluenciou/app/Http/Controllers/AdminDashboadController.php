<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class AdminDashboadController extends Controller
{

    public function __construct(
        private UserService $userService,
    ){}

    public function index()
    {
        return view('Dashboard.admin.index', [
            'collection' => $this->userService->buscarTodos()
        ]);
    }
}
