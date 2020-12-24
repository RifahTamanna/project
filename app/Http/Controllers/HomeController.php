<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $opinions = Opinion::orderBy('id','DESC')->get()->load('user');
        return view('tutor.index',compact('opinions'));
    }

 public function jobBoard()
    {
        
$jobs  = DB::table('jobs')
        ->select('jobs.*')->get();
        
        return view('tutor.job-board',compact('jobs'));
    }

   public function jobadd(Request $request, $user)
    {
        $userid = Auth::id();
      
        DB::table('jobs')->insert([
            'user_id' => $userid,
            'title'    => $request->title,
            'address'    => $request->address,
            'class'    => $request->class,
            
            'gender'    => $request->gender,
            'duration'    => $request->duration,
            'requirment'    => $request->requirment,
            'salary'    => $request->salary,
            'note'    => $request->note,
            'course'    => $request->course,
            'category'    => $request->category,
                        'stdgender'    => $request->stdgender,
                                    'stdnumber'    => $request->stdnumber
            
        ]);

        return view('tutor.opinion.job');
       
    }

}
