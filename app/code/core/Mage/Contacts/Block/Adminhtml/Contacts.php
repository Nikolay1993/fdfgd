<?php

class Mage_Contacts_Block_Adminhtml_Contacts extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('contacts');
        $this->_blockGroup = 'contacts';
        $this->_controller = 'adminhtml_contacts';

        $this->_headerText = $helper->__('Contacts Management');
        $this->_addButtonLabel = $helper->__('Add Contacts');
    }

}