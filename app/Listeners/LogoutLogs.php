<?php

namespace App\Listeners;

use App\attendance;
use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogoutLogs
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    //private $UserLogoutHistory;
    public $attendance;


    public function __construct(  attendance $attendance )
    {
        $this->attendance = $attendance;

    }


    public function handle(Logout $event )
    {
        $this->attendance->setLogOutAttendance();
    }}
