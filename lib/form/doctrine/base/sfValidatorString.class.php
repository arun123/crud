<?php

class sfValidatorString extends sfValidatorBase
{
 
  protected function configure($options = array(), $messages = array())
  {
    $this->addOption('min_length','4');
    $this->addOption('max_length','255');
    $this->addMessage('max', '"%value%" must be less than %max% character .');
    $this->addMessage('min', '"%value%" must be greater than %min% character. ');
    $this->setMessage('invalid', '"%value%" is not an string.');
  }
 
  protected function doClean($value)
  {
    $clean = intval($value);
    if (strval($clean) != $value)
    {
      throw new sfValidatorError($this, 'invalid', array('value' => $value));
    }
    if ($this->hasOption('max_length') && $clean > $this->getOption('max_length'))
    {
      throw new sfValidatorError($this, 'max_length', array('value' => $value, 'max_length' => $this->getOption('max_length')));
    }
    if ($this->hasOption('min_length') && $clean < $this->getOption('min_length'))
    {
      throw new sfValidatorError($this, 'min_length', array('value' => $value, 'min_length' => $this->getOption('min_length')));
    }
 
    return $clean;
  }
}
