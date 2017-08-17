<?php

class MY_Form_validation extends CI_Form_validation
{
    public function __construct($config = array())
    {
        parent::__construct();
    }
    public function error_array()
    {
        //_error_array =>   it is a protected quality which belongs to the ci form and is not a method
            if (count($this->_error_array) > 0){
                return $this->_error_array;
            }
    }
}
