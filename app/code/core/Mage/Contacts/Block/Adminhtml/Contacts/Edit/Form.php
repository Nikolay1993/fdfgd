<?php

class Mage_Contacts_Block_Adminhtml_Contacts_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    protected function _prepareForm()
    {
        $helper = Mage::helper('contacts');
        $model = Mage::registry('current_contacts');

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array(
                'id' => $this->getRequest()->getParam('id')
            )),
            'method' => 'post',
            'enctype' => 'multipart/form-data'
        ));

        $this->setForm($form);

        $fieldset = $form->addFieldset('news_form', array('legend' => $helper->__('Contacts Information')));

        $fieldset->addField('gender', 'select', array(
            'label' => $helper->__('Gender'),
            'required' => true,
            'name' => 'gender',
            'options' => Mage::getModel('contacts/source_status')->getGender()
        ));

        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => true,
            'name' => 'name',
        ));

        $fieldset->addField('email', 'hidden', array(
            'label' => $helper->__('Email'),
            'required' => true,
            'name' => 'email',
        ));

        $fieldset->addField('telephone', 'text', array(
            'label' => $helper->__('Telephone'),
            'required' => true,
            'name' => 'telephone',
        ));

        $fieldset->addField('comment', 'text', array(
            'label' => $helper->__('Comment'),
            'required' => true,
            'name' => 'comment',
        ));

        $fieldset->addField('learned', 'text', array(
            'label' => $helper->__('Learned'),
            'required' => true,
            'name' => 'learned',
        ));

        $fieldset->addField('created', 'date', array(
            'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            'image' => $this->getSkinUrl('images/grid-cal.gif'),
            'label' => $helper->__('Created'),
            'name' => 'created'
        ));

        $fieldset->addField('status', 'select', array(
            'label' => $helper->__('Status'),
            'required' => true,
            'name' => 'status',
            'options' => Mage::getModel('contacts/source_status')->getStatuses()
        ));

        $fieldset->addField('answer', 'text', array(
            'label' => $helper->__('Answer'),
            'required' => true,
            'name' => 'answer',
        ));

        $fieldset->addField('notified', 'select', array(
            'label' => $helper->__('Notified'),
            'required' => true,
            'name' => 'notified',
            'options' => Mage::getModel('contacts/source_status')->getNotified()
        ));

        $form->setUseContainer(true);

        if($data = Mage::getSingleton('adminhtml/session')->getFormData()){
            $form->setValues($data);
        } else {
            $form->setValues($model->getData());
        }

        return parent::_prepareForm();
    }

}