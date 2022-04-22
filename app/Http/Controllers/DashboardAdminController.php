<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Tanggapan;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index(){
        return view ('pages.admin.dashboard.index', [
            'title' => 'Dashboard Admin',
            'active' => 'dashboardadmin',
            'user' => User::where('roles','=', 'USER')->count(),
            'admin' => User::where('roles', '=', 'ADMIN')->count(),
            // 'pending' => Keluhan::where('status', 'Belum di Proses')->count(),
            // 'process' => Keluhan::where('status', 'Sedang di Proses')->count(),
            // 'success' => Keluhan::where('status', 'Selesai')->count(),
        ]);
    }
}
