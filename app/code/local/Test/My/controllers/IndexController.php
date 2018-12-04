<?php


class Test_My_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        $name = $this->getRequest()->getPost('name');
        $phone = $this->getRequest()->getPost('phone');

        if(isset($name) && ($name!='')  && isset($phone) && ($phone!='') ) {

            $model = Mage::getModel('testmy/test');
            $model->setName($name);
            $model->setPhone($phone);
            $model->setSatus(Test_My_Model_Source_Status::PROCESSING);
            if($model->save() == true){
                Mage::getSingleton('core/session')->addSuccess('Successful');
            }
            if($model->save() != true){
                Mage::getSingleton('core/session')->addError('Error');
            }

        }

        $this->_redirect('test/index/index');
    }

}