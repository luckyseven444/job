<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use App\Circular;
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
        $data=[];

        if(User::find(Auth::id())->role_id == 3){
                   $data['isApplicant'] = true;
            }
            else{
                $data['isApplicant'] = false;
            }
            $user_ids = DB::table('circular_user')->where('user_id', '=', auth()->user()->id)->get();
            $arr = [];
            foreach ($user_ids as $item){
                 $arr[]=$item->circular_id;
             }
            $data['circulars'] = Circular::whereNotIn('id',$arr)->get();

         return view('home', $data);
    }
}
