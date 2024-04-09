<?php

class sfValidatorFileMulti extends sfValidatorFile
{

  /**
   * @see sfValidatorBase
   */
  #[\ReturnTypeWillChange]
  protected function doClean($value): array
  {
    $clean = array();

    foreach ($value as $file)
    {
      $clean[] = parent::doClean($file);
    }

    return $clean;
  }
}
