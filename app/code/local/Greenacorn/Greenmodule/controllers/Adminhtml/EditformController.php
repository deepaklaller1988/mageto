<?php
class Greenacorn_Greenmodule_Adminhtml_EditformController extends Mage_Adminhtml_Controller_Action

{

          public function indexAction()

    {

             $this->loadLayout();

             $this->_title($this->__(“Edit Form”));

             $this->_addContent($this->getLayout()->createBlock(Greenmodule/adminhtml_myblock’))

                ->_addLeft($this->getLayout()->createBlock());

             $this->renderLayout();

    }

}
?>