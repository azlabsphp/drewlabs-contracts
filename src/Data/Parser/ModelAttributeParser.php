<?php

namespace Drewlabs\Contracts\Data\Parser;

use Drewlabs\Contracts\Data\Model\Parseable;

interface ModelAttributeParser
{

  /**
   * Set the current model to work on
   *
   * @param Parseable $model
   * @return static
   */
  public function setModel($model);

  /**
   * Returns the model bein configured or create_new_folder
   *
   * @return Parseable
   */
  public function getModel();

  /**
   * Parse model state with the matching field defined in the model fillable array
   * @param array $model_state_map
   * @return static
   */
  public function setModelInputState(array $model_state_map);

  /**
   * Return a dictionnary of model fillable columns along with the insertion values
   *
   * @return array|null
   */
  public function getModelInputState();
}
