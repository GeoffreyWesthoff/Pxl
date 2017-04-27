<?php

    namespace App\Console;

    use App\Console\Commands\Image\AutoDelete;
    use App\Console\Commands\Setup;
    use Illuminate\Console\Scheduling\Schedule;
    use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

    /**
     * Class Kernel
     *
     * @package App\Console
     */
    class Kernel extends ConsoleKernel {
        /**
         * The Artisan commands provided by your application.
         *
         * @var array
         */
        protected $commands = [
            AutoDelete::class,
            Setup::class
        ];

        /**
         * Define the application's command schedule.
         *
         * @param  \Illuminate\Console\Scheduling\Schedule $schedule
         *
         * @return void
         */
        protected function schedule(Schedule $schedule) {
             $schedule->command('images:autodelete')->everyFiveMinutes();
        }

        /**
         * Register the Closure based commands for the application.
         *
         * @return void
         */
        protected function commands() {
            require base_path('routes/console.php');
        }
    }
