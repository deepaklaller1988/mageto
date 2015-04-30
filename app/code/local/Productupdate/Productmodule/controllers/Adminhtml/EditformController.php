<?php
class Productupdate_Productmodule_Adminhtml_EditformController extends Mage_Adminhtml_Controller_Action

{

          public function indexAction()

    {

             $this->loadLayout();

             $this->_title($this->__(“Edit Form”));

             $this->_addContent($this->getLayout()->createBlock(Productmodule/adminhtml_myblock’))

                ->_addLeft($this->getLayout()->createBlock());

             $this->renderLayout();

    }

}
?>