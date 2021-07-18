<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use App\Models\Designation;
use App\Models\Estate;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        // tetapkan lokasi view untuk login
        Fortify::loginView(function ()
        {
            return view('index');
        });

        // tetapkan lokasi view untuk register
        Fortify::registerView(function ()
        {
            $designations=Designation::all();
            $estates=Estate::all();

            return view('auth.register',['designations'=>$designations,'estates'=>$estates]);
        });

        // tetapkan lokasi view untuk forgot-password
        Fortify::requestPasswordResetLinkView(function ()
        {
            return view('auth.forgot-password');
        });

        // tetapkan lokasi view untuk reset-password
        Fortify::resetPasswordView(function ($request)
        {
            return view('auth.reset-password', ['request' =>
        $request]);
        });
    }
}
