<?php

class sfValidatorStringV extends sfValidatorBase
{
 
  protected function configure($options = array(), $messages = array())
  {
    $this->addOption('min','4');
    $this->addOption('max','10');
    $this->addMessage('max', '"%value%" must be less than %max%.');
    $this->addMessage('min', '"%value%" must be greater than %min%. ');
    $this->setMessage('invalid', '"%value%" is not an integer.');
  }
 
  protected function doClean($value)
  {
    $clean = intval($value);
    if (strval($clean) != $value)
    {
      throw new sfValidatorError($this, 'invalid', array('value' => $value));
    }
    if ($this->hasOption('max') && $clean > $this->getOption('max'))
    {
      throw new sfValidatorError($this, 'max_length', array('value' => $value, 'max_length' => $this->getOption('max_length')));
    }
    if ($this->hasOption('min') && $clean < $this->getOption('min'))
    {
      throw new sfValidatorError($this, 'min', array('value' => $value, 'min' => $this->getOption('min')));
    }
 
    return $clean;
  }
}
