<?php

class Test_My_Block_Adminhtml_Test_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'testmy';
        $this->_controller = 'adminhtml_test';
    }

    public function getHeaderText()
    {
        $helper = Mage::helper('testmy');
        $model = Mage::registry('current_test');

        if ($model->getId()) {
            return $helper->__("Edit item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add item");
        }
    }

}