<?php
 
namespace App\Providers;
use App\Contracts\AdminContract; 
use App\Contracts\DepartmentContract;
use App\Contracts\CityContract;
use App\Contracts\CountryContract;
use App\Contracts\SalaryContract;
use App\Contracts\StateContract;
use App\Contracts\DivisionContract;
use Illuminate\Support\ServiceProvider;
use App\Repositories\AdminRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\CityRepository;
use App\Repositories\CountryRepository;
use App\Repositories\SalaryRepository;
use App\Repositories\StateRepository;
use App\Repositories\DivisionRepository;
class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AdminContract::class=>AdminRepository::class,
        DepartmentContract::class=>DepartmentRepository::class,
        CityContract::class=>CityRepository::class,
        CountryContract::class=>CountryRepository::class,
        SalaryContract::class=>SalaryRepository::class,
        StateContract::class=>StateRepository::class,
        DivisionContract::class=>DivisionRepository::class,
    ];
 
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    } 
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
 