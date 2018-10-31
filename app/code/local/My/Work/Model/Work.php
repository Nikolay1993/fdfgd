<?php

class My_Work_Model_Work extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('mywork/work');
    }

}