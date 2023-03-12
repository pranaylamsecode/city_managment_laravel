<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use DB;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
       $get_user_details =DB::table('users')->where('id', $userId)->first() ;
       
        $data['user_details'] = $get_user_details;
        $data['user_name'] = $get_user_details->email;
        $data['user_number'] = $get_user_details->number;
        
        $get_city_name = DB::table('cities')->where('id', $get_user_details->city_id)->first();
        $data['user_city_name'] = $get_city_name->city;

        return view('home', $data);
    }
}
