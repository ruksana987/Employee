<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use \App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            if( auth()->check() && auth()->user()->is_admin == 1){
                $event->menu->add(auth()->user()->name);
                $event->menu->add(

                    [
                        'text' => 'profile',
                        'url'  => '/profile',
                        'icon' => 'fas fa-fw fa-user',
                    ],
                    [
                        'text' => 'change_password',
                        'url'  => 'user-management',
                        'icon' => 'fas fa-fw fa-lock',
                    ],
                    [
                        'text'    => 'System Management',
                        'icon'    => 'fas fa-fw fa-share',
                        'submenu' => [
                            [
                                'text' => 'Department',
                                'url'  => 'system-management/department',
                            ],
                            [
                                'text'    => 'Division',
                                'url'     => 'system-management/division',

                            ],
                            [
                                'text' => 'Country',
                                'url'  => 'system-management/country',
                            ],  [
                                'text' => 'State',
                                'url'  => 'system-management/state',
                            ],  [
                                'text' => 'City',
                                'url'  => 'system-management/city',
                            ],



                        ],
                    ],
                    [
                        'text' => 'Employee Management',
                        'url'  => 'employee-management',
                        'icon' => 'fas fa-fw fa-lock',
                    ],


                    [
                        'text' => 'Attendance Management',
                        'url'  => 'attendance',
                        'icon' => 'fas fa-fw fa-lock',
                    ],
                    [
                        'text' => 'Payroll Management',
                        'url'  => 'payment',
                        'icon' => 'fas fa-fw fa-lock',
                    ]





                );
            }
            elseif( auth()->check() && auth()->user()->is_admin == 0){
                $event->menu->add(auth()->user()->name);
                $event->menu->add([

                    'text' => 'profile',
                    'url'  => 'profile ',
                    'icon' => 'fas fa-fw fa-user',
                ],



                    [
                        'text' => 'Attendance Management',
                        'url'  => 'attendance',
                        'icon' => 'fas fa-fw fa-lock',
                    ],
                    [
                        'text' => 'Payroll Management',
                        'url'  => 'payment',
                        'icon' => 'fas fa-fw fa-lock',

                    ]);
            }

        });


    }

}
