<?php

namespace NetkodBilisim\TrIdentityNumberValidationRuleExtend\Rules;

use Illuminate\Contracts\Validation\Rule;
use NetkodBilisim\TrIdentityNumberValidation;

class TrIdentityNumberRule implements Rule
{
    public function passes($attribute, $value): bool
    {
        return TrIdentityNumberValidation::validate($value);
    }

    public function message(): string
    {
        return trans('NetkodBilisim::trIdentityNumberValidationRuleExtend.error');
    }
}
