<?php

namespace Drewlabs\Contracts\Validator;

interface ValidatorInterface extends ValidationErrorProvider
{

    /**
     * Validate provided dirty input against a set of rules and messages
     *
     * @param Validatable|array|string $validatable
     * @param array $input
     * @param array|null $input
     * @return static
     */
    public function validate($validatable, array $input, $messages = array());

    /**
     * Model {is_update} property setter
     *
     * @param boolean $update
     * @return static
     */
    public function setUpdate(bool $update);
}
