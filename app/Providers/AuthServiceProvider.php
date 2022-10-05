<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
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

        //
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Ciao!')
                ->subject('verifica indirizzo e-mail')
                ->line('Fai clic sul pulsante qui sotto per verificare il tuo indirizzo email.')
                ->action('verifica indirizzo e-mail', $url)
                ->line('Se non hai creato un account, non sono necessarie ulteriori azioni.');
        });
        /*
        ResetPassword::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->greeting('Ciao!')
                ->subject('Notifica di reimpostazione della password')
                ->line('Hai ricevuto questa email perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.')
                ->action('Resetta la password', $url)
                ->line('Questo collegamento per la reimpostazione della password scadrà tra 60 minuti.')
                ->line('Se non hai richiesto la reimpostazione della password, non sono necessarie ulteriori azioni.');
        });
        */
    }
}
