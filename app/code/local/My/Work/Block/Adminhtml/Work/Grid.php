<?php

class My_Work_Block_Adminhtml_Work_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('mywork/work')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {

        $helper = Mage::helper('mywork');

        $this->addColumn('id', array(
            'header' => $helper->__('ID'),
            'index' => 'id'
        ));

        $this->addColumn('name', array(
        'header' => $helper->__('Name'),
        'index' => 'name',
        'type' => 'text',
        ));

        $this->addColumn('question', array(
        'header' => $helper->__('Question'),
        'index' => 'question',
        'type' => 'text',
        ));

        $this->addColumn('answer', array(
        'header' => $helper->__('Answer'),
        'index' => 'answer',
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
            'options' => Mage::getModel('mywork/source_status')->getStatuses()
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