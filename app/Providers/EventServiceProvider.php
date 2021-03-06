<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\AwardAchievements;

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
            /*'App\Events\ProductPurchased' => [
                'App\Listeners\AwardAchievements',
            ],
            'App\Events\ProductPurchased' => [
                'App\Listeners\SendShareableCoupon',
            ]*/
            ProductPurchased::class => [

                AwardAchievements::class, SendShareableCoupon::class
                
                ]
                
        ];
    
    /*public function shouldDiscoverEvents()
        {
        return true;
        }*/
        
        

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
