<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        //register my auth. we define an auth key and this can be referenced in any view using @can ()
        Gate::define('update-article', function(User $user, Article $article){
            //return true;
            //we have relation between article and user in the article model, we ask article to give a user , and if is the same auth user then go
            return $article->user->is($user);
        });
    }
}
