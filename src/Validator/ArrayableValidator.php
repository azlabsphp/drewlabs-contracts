<?php

namespace Drewlabs\Contracts\Validator;

interface ArrayableValidator extends ValidationErrorProvider
{

    /**
     * Provides validation functionnalities for array inputs
     *
     * @param array $values
     * @param array $rules
     * @param array $messages
     * @return static|mixed
     */
    public function validate(array $values, array $rules, array $messages = []);
}
