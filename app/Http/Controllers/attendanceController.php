<?php

namespace App\Http\Controllers;

use App\attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class attendanceController extends Controller
{
    public function index()
    {


        if (Auth::user()->is_admin == 1) {


            $attendance = attendance::all();



            return view('attendance-list', compact('attendance'));
        }else{

            $attendance =
                DB::table('attendances')
                    ->where('user_id',auth()->user()->id )
                    ->get();
            //dd($attendance);
        }
        return view('attendance-list', compact('attendance'));
    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
