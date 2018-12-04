<?php


class Test_My_Model_Test extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('testmy/test');
    }

}