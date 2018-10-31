<?php

class My_Work_Model_Resource_Work extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('mywork/table_work', 'id');
    }

}