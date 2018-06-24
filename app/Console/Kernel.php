<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Properties;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $schedule->call(function () {
          include('crosscurs.php');
          $houses = Properties::where('status', 1)->get();
          foreach ($houses as $house) {
              // $havephone = Phone::where('phone', $post->phone)->first();
               if ( ( $house->currency ) && ( $house->price ) )  {
                 if ($house->currency == '₽') {
                   $house->crossrubl = round($house->price);
                   $house->crossdollar = round($house->crossrubl / $data->Valute->USD->Value);
                   $house->crosseuro = round($house->crossrubl / $data->Valute->EUR->Value);
                 }
                 if ($house->currency == '$') {
                   $house->crossrubl = round($house->price * $data->Valute->USD->Value);
                   $house->crossdollar = round($house->price);
                   $house->crosseuro = round($house->crossrubl / $data->Valute->EUR->Value);
                 }
                 if ($house->currency == '€') {
                   $house->crossrubl = round($house->price * $data->Valute->EUR->Value);
                   $house->crossdollar = round($house->crossrubl / $data->Valute->USD->Value);
                   $house->crosseuro = round($house->price);
                 }

                 // $house->crossrubl = $data->Valute->EUR->Value;
                 $house->save();

                 // break;
              }
          }
      })->everyTenMinutes();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
