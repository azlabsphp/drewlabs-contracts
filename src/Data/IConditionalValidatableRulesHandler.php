<?php

namespace Drewlabs\Contracts\Data;

/**
 * @deprecated v1.1.0-dev-master
 * Use [Drewlabs\Contracts\Data\MultiValidationRulesHandlerInterface] instead
 */
interface IConditionalValidatableRulesHandler
{

    /**
     * [[multiple]] attribute setter
     *
     * @param boolean $value
     * @return static
     */
    public function setApplyMultipleValidationRules($value);

    /**
     * [[multiple]] attribute getter
     *
     * @return void
     */
    public function getApplyMultipleValidationRulesAttributes();

    /**
     * Reset the conditional scope defintions to their initial values
     *
     * @return static
     */
    public function resetConditionnalAttributes();
}
