<?php

namespace App\Providers;

use App\Dao\student\studentDao;
use App\Services\data\dataService;
use Illuminate\Support\ServiceProvider;
use App\Services\student\studentService;
use App\Contracts\Dao\data\dataDaoInterface;
use App\Contracts\Dao\student\studentDaoInterface;
use App\Contracts\Services\data\dataServiceInterface;
use App\Contracts\Services\student\studentServiceInterface;
use App\Dao\data\dataDao;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(dataDaoInterface::class,dataDao::class);
       $this->app->bind(dataServiceInterface::class,dataService::class);
       $this->app->bind(studentDaoInterface::class,studentDao::class);
       $this->app->bind(studentServiceInterface::class,studentService::class);

        
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
