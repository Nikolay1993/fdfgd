<?php

class Mage_Contacts_Model_Resource_Contacts_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('contacts/contacts');
    }

}