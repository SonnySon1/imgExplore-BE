<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $uploadsPerDay = Photo::where('user_id', Auth::user()->id)
                ->select(DB::raw('DATE(created_at) as day'), DB::raw('count(*) as total'))
                ->groupBy('day')
                ->orderBy('day')
                ->get();

        return view('pages.dashboard', compact('uploadsPerDay'));
    }
}
