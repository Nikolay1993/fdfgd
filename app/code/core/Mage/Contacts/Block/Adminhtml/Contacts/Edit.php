<?php

class Mage_Contacts_Block_Adminhtml_Contacts_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    protected function _construct()
    {
        $this->_blockGroup = 'contacts';
        $this->_controller = 'adminhtml_contacts';

        $this->_addButton('saveandcontinue', array(
            'label' => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class' => 'save',
        ), -100);

        $this->_formScripts[] = "


            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";

        $this->_addButton('notified', array(
            'label'     => Mage::helper('adminhtml')->__('Send notification on email'),
            'onclick'   => "editForm.submit('{$this->getUrl('*/*/notified')}')",
        ), -200);



    }



    public function getHeaderText()
    {
        $helper = Mage::helper('contacts');
        $model = Mage::registry('current_contacts');

        if ($model->getId()) {
            return $helper->__("Edit Contacts item '%s'", $this->escapeHtml($model->getTitle()));
        } else {
            return $helper->__("Add Contacts item");
        }
    }

}
