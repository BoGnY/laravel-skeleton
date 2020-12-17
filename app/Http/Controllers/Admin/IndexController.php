<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Responsable;
use Inertia\Inertia;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:' . config('core.admin_role'));
    }

    /**
     * Show the application dashboard.
     */
    public function index(): Responsable
    {
        return Inertia::render('Admin/Index');
    }
}
