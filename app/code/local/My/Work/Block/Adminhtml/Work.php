<?php

class My_Work_Block_Adminhtml_Work extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    protected function _construct()
    {
        parent::_construct();

        $helper = Mage::helper('mywork');
        $this->_blockGroup = 'mywork';
        $this->_controller = 'adminhtml_work';

        $this->_headerText = $helper->__('My grid in Management');
        $this->_addButtonLabel = $helper->__('Add Data');
    }
}