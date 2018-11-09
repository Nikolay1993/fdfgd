<?php

class Mage_Contacts_Adminhtml_ContactsController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout()->_setActiveMenu('contacts');
        $this->_addContent($this->getLayout()->createBlock('contacts/adminhtml_contacts'));
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $id = (int) $this->getRequest()->getParam('id');
        Mage::register('current_contacts', Mage::getModel('contacts/contacts')->load($id));

        $this->loadLayout()->_setActiveMenu('contacts');
        $this->_addContent($this->getLayout()->createBlock('contacts/adminhtml_contacts_edit'));
        $this->renderLayout();
    }

    public function saveAction()
    {
        try {
            $id = $this->getRequest()->getParam('id');
            $model = Mage::getModel('contacts/contacts')->load($id);
            $model
                ->setData($this->getRequest()->getParams())
                ->setCreatedAt(Mage::app()->getLocale()->date())
                ->save();

            if(!$model->getId()) {
                Mage::getSingleton('adminhtml/session')->addError('Cannot save the contacts');
            }
        } catch(Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            Mage::getSingleton('adminhtml/session')->setBlockObject($model->getData());
            return  $this->_redirect('*/*/edit',array('id'=>$this->getRequest()->getParam('id')));
        }

        Mage::getSingleton('adminhtml/session')->addSuccess('Contacts was saved successfully!');

       $this->_redirect('*/*/'.$this->getRequest()->getParam('back','index'),array('id'=>Mage::getModel('contacts/contacts')->load($this->getRequest()->getParam('id'))->getId()));
    }

    public function deleteAction()
    {
        if ($id = $this->getRequest()->getParam('id')) {
            try {
                Mage::getModel('contacts/contacts')->setId($id)->delete();
                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('Deleted successfully'));
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $id));
            }
        }
        $this->_redirect('*/*/');
    }

    public function notifiedAction()
    {
        $mail = Mage::getModel('core/email');
        $email = $this->getRequest()->getParam('email');
        $answer = $this->getRequest()->getParam('answer');
        $name = $this->getRequest()->getParam('name');

        try {
            Mage::getSingleton('core/session')->addSuccess('Your request has been sent');
            $mail->send($email, $name, $answer);
            $this->_redirect('*/*/');
        }
        catch (Exception $e) {
            Mage::getSingleton('core/session')->addError('Unable to send.');
            $this->_redirect('*/*/');
        }

    }

}