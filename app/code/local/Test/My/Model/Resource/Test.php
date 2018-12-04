<?php


class Test_My_Model_Resource_Test extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('testmy/table_testmy', 'id');
    }

}