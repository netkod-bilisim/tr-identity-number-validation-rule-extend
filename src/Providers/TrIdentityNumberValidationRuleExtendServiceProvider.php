<?php

namespace NetkodBilisim\TrIdentityNumberValidationRuleExtend\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Validator;

class TrIdentityNumberValidationRuleExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'NetkodBilisim');

        Validator::extend('tr_identity_number', 'NetkodBilisim\TrIdentityNumberValidationRuleExtend\Rules\TrIdentityNumberRule@passes');
    }
}
