<?php

namespace App\Providers;

use App\Events\CalcMoneyEvent;
use App\Events\doingPayment;
use App\Events\ProductView;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ProductView::class => [
            '\App\Listeners\IncreaseProductView'
        ],
        CalcMoneyEvent::class=>[
            '\App\Listeners\CalculatingMoney'
        ],
        doingPayment::class=>[
            '\App\Listeners\unableUserListeners'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
