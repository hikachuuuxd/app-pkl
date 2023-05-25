<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Ortu;
use App\Models\Dudi;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('guru', function( $user)
        {
            // return $guru->user_id === $user->id;
            return $user->role == 'guru';
        });
        Gate::define('siswa', function($user)
        {
            return $user->role == 'siswa';
        });
        Gate::define('ortu', function($user)
        {
            return $user->role == 'ortu';
        });
        Gate::define('dudi', function( $user)
        {
            return $user->role == 'dudi';
          
        });
        Gate::define('admin', function($user)
        {
            return $user->role == 'admin';
        });

        



        //
    }
}
