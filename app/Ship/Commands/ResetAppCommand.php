<?php

namespace App\Ship\Commands;

use App\Ship\Parents\Commands\ConsoleCommand;
use Artisan;

class ResetAppCommand extends ConsoleCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset App (Migraciones, Seeders, Passport, etc...)!';

    private $array_commands = array();
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->initArray();
        $bar = $this->output->createProgressBar(count($this->array_commands));
        $bar->setFormat('%current%/%max% [%bar%] %message%  <fg=green>DONE</>');
        $bar->start();

        foreach ($this->array_commands as $key => $value) {
            $bar->setMessage($value['message']);
            $value['function']();
            $bar->advance();
            // $this->newLine();
        }
        $bar->finish();
        $this->newLine();
        $this->writeInfos();
        $this->newLine();

    }

    private function updatePasswordEnv()
    {
        $webClientToken = \DB::table('oauth_clients')
            ->select('secret')
            ->where('id', '=', 2)
            ->value('secret');

        $key = 'CLIENT_WEB_SECRET';
        if (\App::environment(['local'])) {
            file_put_contents(base_path('.env'), str_replace(
                $key . '=' . env($key, 'default'),
                $key . '=' . $webClientToken,
                file_get_contents(base_path('.env'))
            ));
        }
    }

    private function writeInfos()
    {
        foreach ($this->array_commands as $key => $value) {
            $this->info($value['info']);
        }
    }

    function initArray()
    {
        array_push($this->array_commands,
            [
                'message'  => 'Generating APP KEY ......',
                'function' => function () {
                    Artisan::call('key:generate --force');
                },
                'info'     => '1. App Key generated successfully',
            ],
            [
                'message'  => 'Running optimize clear...',
                'function' => function () {
                    Artisan::call('optimize:clear -n');
                    Artisan::call('config:clear');
                    Artisan::call('cache:clear');
                },
                'info'     => '2. App clear successfully',
            ],
            [
                'message'  => 'Storage link to public..',
                'function' => function () {
                    Artisan::call('storage:link');
                },
                'info'     => '3. Storage link created',
            ],
            [
                'message'  => 'Wiping DB Data............',
                'function' => function () {
                    Artisan::call('db:wipe --force');
                },
                'info'     => '4. Data wiped successfully',
            ],
            [
                'message'  => 'Running Migrations........',
                'function' => function () {
                    Artisan::call('migrate:refresh --seed --force');
                },
                'info'     => '5. Migrations ran successfully',
            ],
            [
                'message'  => 'Installing passport.......',
                'function' => function () {
                    Artisan::call('passport:install --force');
                },
                'info'     => '6. Passport installed successfully',
            ],


        );
        if (\App::environment(['local'])) {
            array_push($this->array_commands, [
                'message'  => 'Copying KEY into .env ....',
                'function' => function () {
                    $this->updatePasswordEnv();
                },
                'info'     => '7. Passport API KEY set successfully (Only in local...)',
            ]);
        }
    }
}
