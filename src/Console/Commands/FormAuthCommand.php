<?php namespace Bantenprov\FormAuth\Console\Commands;

use Illuminate\Console\Command;

use File;
/**
 * The FormAuthCommand class.
 *
 * @package Bantenprov\FormAuth
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class FormAuthCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'form-auth:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to setup form-auth package';


    protected $files;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->files = (Object) [
            'api' => [
                'stub' => 'api.stub',
                'file_put_location' => base_path().'/routes/api.php'
            ],
            'LoginController' => [
                'stub' => 'LoginController.stub',
                'file_put_location' => app_path().'/Http/Controllers/Auth/LoginController.php'
            ],
            'ProfileController' => [
                'stub' => 'ProfileController.stub',
                'file_put_location' => app_path().'/Http/Controllers/Settings/ProfileController.php'
            ],
            'RegisterController' => [
                'stub' => 'RegisterController.stub',
                'file_put_location' => app_path().'/Http/Controllers/Auth/RegisterController.php'
            ],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {           

        $this->putFileContent($this->files->api['file_put_location'], $this->getStubFileContent($this->files->api['stub']));

        $this->info('change file content api.php success');

        $this->putFileContent($this->files->LoginController['file_put_location'], $this->getStubFileContent($this->files->LoginController['stub']));

        $this->info('change file content LoginController.php success');

        $this->putFileContent($this->files->ProfileController['file_put_location'], $this->getStubFileContent($this->files->ProfileController['stub']));

        $this->info('change file content ProfileController.php success');

        $this->putFileContent($this->files->RegisterController['file_put_location'], $this->getStubFileContent($this->files->RegisterController['stub']));

        $this->info('change file content RegisterController.php success');
        
    }

    public function getStubFileContent($file_name)
    {
        return File::get(__DIR__.'/../../stubs/'.$file_name);
    }

    public function putFileContent($path, $content)
    {
        return File::put($path, $content);
    }
}
