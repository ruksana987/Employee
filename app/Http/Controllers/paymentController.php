<?php

namespace App\Http\Controllers;

use App\attendance;
use App\Mail\payment_to_user;
use App\payment;
use App\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Foreach_;
use PhpParser\Node\Stmt\Return_;

class paymentController extends Controller
{
    public function index()
    {


        if (Auth::user()->is_admin == 1) {


            $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
            // $month = Carbon::now()->format('F-Y');
            //   var_dump($month);
            $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();


            $results =
                DB::table('users')
                    ->select('users.id As user_id', 'users.name', 'users.email',
                        DB::raw('COUNT(attendances.user_id) AS no_of_days'),
                        DB::raw('sum(attendances.time_hr)as total_time'))

                    ->leftJoin('attendances', 'users.id', '=', 'attendances.user_id')
                    ->groupBy('users.id', 'users.name', 'users.email')
                    ->get();


            return view('payment.index', compact('results'))->with('message', 'successfull');

            // return view('payment.index', compact('results'));

        }else
        {
            $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
            // $month = Carbon::now()->format('F-Y');
            //   var_dump($month);
            $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();

            $results =
                DB::table('users')
                    ->select('users.id As user_id', 'users.name', 'users.email',
                        DB::raw('COUNT(attendances.user_id) AS no_of_days'),
                        DB::raw('sum(attendances.time_hr)as total_time'))
                    ->where('user_id',auth()->user()->id )

                    ->leftJoin('attendances', 'users.id', '=', 'attendances.user_id')
                    ->groupBy('users.id', 'users.name', 'users.email')
                    ->get();

            return view('payment.index', compact('results'))->with('message', 'successfull');



        }
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

    public function sendmail()
    {
        if (Auth::user()->is_admin == 1) {

        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        // $month = Carbon::now()->format('F-Y');
        //   var_dump($month);
        $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();


        $results =
            DB::table('users')
                ->select('users.id As user_id', 'users.name', 'users.email',
                    DB::raw('COUNT(attendances.user_id) AS no_of_days'),
                    DB::raw('sum(attendances.time_hr)as total_time'))
                ->whereBetween('date_month', [$firstDayofPreviousMonth, $lastDayofPreviousMonth])
                ->leftJoin('attendances', 'users.id', '=', 'attendances.user_id')
                ->groupBy('users.id', 'users.name', 'users.email')
                ->get();
        // dd($results);

        foreach ($results as $rs) {
            (Mail::to($rs->email)->send(new payment_to_user($rs)));
        }
//      //return view('emails.payment.payment_to_user');
dd($results);
        return redirect('/payment')->with('success', 'payroll send successfull');

        // return view('payment.index', compact('results'));
        // return view('payment.index', compact('results'))->with('message', 'payroll send successfull');


    }
        }

    public function exampledemo()
    {

        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->subMonth()->toDateString();
        $month = Carbon::now()->format('F-Y');
        var_dump($month);
        $lastDayofPreviousMonth = Carbon::now()->subMonth()->endOfMonth();


        //    DB::table('attendances')
        //  ->whereBetween('date_from', [$firstDayofPreviousMonth, $lastDayofPreviousMonth]);


        $results =
            DB::table('users')
                ->select('users.id As user_id', 'users.name', 'users.email',
                    DB::raw('COUNT(attendances.user_id) AS no_of_days'),
                    DB::raw('sum(attendances.time_hr)as total_time'))
                ->whereBetween('date_month', [$firstDayofPreviousMonth, $lastDayofPreviousMonth])
                ->leftJoin('attendances', 'users.id', '=', 'attendances.user_id')
                ->groupBy('users.id', 'users.name', 'users.email')
                ->get();


        return view("payment", compact('results'));


    }
}
