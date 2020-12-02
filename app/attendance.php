<?php

namespace App;

use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class attendance extends Model
{
    protected $table='attendances';
    protected $guarded=[];

    public $timestamps = false;

    protected $fillable = ['user_id','email','date_month','time_hr'];

    public function setLogOutAttendance()
    {
           $date=Carbon::today()->toDateString();

              $exist =
            DB::table('attendances')
                ->where('email',Auth::user()->email)
                ->where('date_month',$date)
                ->get();

        if(count($exist) > 0)
        {
            echo "There is data";
        }
        else


            $this->insert ([

                'user_id' => Auth::user()->id,
                'user_name'=>Auth::user()->name,
                'email'=>Auth::user()->email,
                'date_month'=>$date,
                'time_hr'=>'8',
                ]);






    }






public function users()
    {
        return $this->belongsToMany(attendance::class);
    }
}
