<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $houseRecent = Accommodation::where('status', 1)->take(4)->get();
        return view('home', [
            'logementsRecents' => $houseRecent
        ]);
    }

}
