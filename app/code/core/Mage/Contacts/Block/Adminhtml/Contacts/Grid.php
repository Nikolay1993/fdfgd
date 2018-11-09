<?php

class Mage_Contacts_Block_Adminhtml_Contacts_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('contacts/contacts')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('contacts');

        $this->addColumn('id', array(
            'header' => $helper->__('ID'),
            'index' => 'id'
        ));

        $this->addColumn('gender', array(
            'header' => $helper->__('Gender'),
            'index' => 'gender',
            'type' => 'options',
            'options' => Mage::getModel('contacts/source_status')->getGender()
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text',
        ));

        $this->addColumn('email', array(
            'header' => $helper->__('Email'),
            'index' => 'email',
            'type' => 'text',
        ));

        $this->addColumn('telephone', array(
            'header' => $helper->__('Telephone'),
            'index' => 'telephone',
            'type' => 'text',
        ));

        $this->addColumn('comment', array(
            'header' => $helper->__('Comment'),
            'index' => 'comment',
            'type' => 'text',
        ));

        $this->addColumn('learned', array(
            'header' => $helper->__('Learned'),
            'index' => 'learned',
            'type' => 'text',
        ));

        $this->addColumn('created', array(
            'header' => $helper->__('Created'),
            'index' => 'created',
            'type' => 'date',
        ));

        $this->addColumn('status', array(
            'header' => $helper->__('Status'),
            'index' => 'status',
            'type' => 'options',
            'options' => Mage::getModel('contacts/source_status')->getStatuses()
        ));

        $this->addColumn('answer', array(
            'header' => $helper->__('Answer'),
            'index' => 'answer',
            'type' => 'text',
        ));

        $this->addColumn('notified', array(
            'header' => $helper->__('Notified'),
            'index' => 'notified',
            'type' => 'options',
            'options' => Mage::getModel('contacts/source_status')->getNotified()
        ));




        return parent::_prepareColumns();
    }

    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $model->getId(),
        ));
    }

}