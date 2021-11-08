<?php

namespace App\Providers;

use App\Dao\Tasks\TaskDao;
use App\Dao\Tasks\TasksDao;
use App\Service\Tasks\Taskservice;
use App\Service\Tasks\TasksService;
use Illuminate\Support\ServiceProvider;
use App\Constracts\Dao\Tasks\TasksDaoInterface;
use App\Constracts\Services\Tasks\TasksServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TasksDaoInterface::class,TasksDao::class);
       $this->app->bind(TasksServiceInterface::class,TasksService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
