<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate for managing all users
        Gate::define('manage-users', function (User $user) {
            return $user->role_id == 1;
        });

        // Gate for managing employers, businesses, dealers, and agents
        Gate::define('manage-clients', function (User $user) {
            return $user->role_id == 3;
        });

        // Define specific gates for each entity type
        $clients = ['employer', 'business', 'dealer', 'agent'];
        foreach ($clients as $client) {
            Gate::define("manage-$client", function (User $user) use ($client) {
                return Gate::allows('manage-clients', $user);
            });
        }}
}
