<?php

class Mage_Contacts_Model_Resource_Contacts extends Mage_Core_Model_Mysql4_Abstract
{

    public function _construct()
    {
        $this->_init('contacts/table_contacts', 'id');
    }

}