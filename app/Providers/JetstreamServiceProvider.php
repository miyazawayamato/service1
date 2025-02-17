<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

// use App\Http\Livewire\UpdateProfileInformationForm;
// use Livewire\Livewire;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //新規追加
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
        //追加
        // Livewire::component('profile.update-profile-information-form', UpdateProfileInformationForm::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
