<?php

class My_Work_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        $name = $this->getRequest()->getPost('name');
        $question = $this->getRequest()->getPost('question');

        if(isset($name) && ($name!='')  && isset($question) && ($question!='') ) {

            $model = Mage::getModel('mywork/work');
            $model->setName($name);
            $model->setQuestion($question);
            $model->setSatus(My_Work_Model_Source_Status::PROCESSING);
            if($model->save() == true){
                Mage::getSingleton('core/session')->addSuccess('massage successful');
            }
            if($model->save() != true){
                Mage::getSingleton('core/session')->addError('error input');
            }

        }

        $this->_redirect('faq/index/index');
    }

}