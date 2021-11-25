<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SecondhandProduct;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //for graph
        $userData = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');
        //for showing the users
        $users = User::all();
        //to get the count for recently added users
        $getusertoday = User::whereDate('created_at', '>=', date('Y-m-d H:i:s', strtotime('-7 days')))->count();
        //to show the recently added products
        $products = Product::where('created_at', '>', Carbon::now()->subDays(7))->take(5)->orderBy('created_at', 'desc')->get();
        $approvalPending = SecondhandProduct::where('status', 0)->count();


        //        return view('chart-js', $data);

        return view('home', compact('users', 'userData', 'getusertoday', 'products','approvalPending'));
    }
}
