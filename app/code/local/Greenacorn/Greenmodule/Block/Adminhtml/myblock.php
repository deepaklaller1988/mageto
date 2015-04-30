<?php
class Greenacorn_Greenmodule_Block_Adminhtml_Myblock extends Mage_Adminhtml_Block_Template

{

          public function __construct() {

                   parent::__construct();

                   $this->setTemplate(Greenmodule/edit_form.phtml’);

                   //$this->setFormAction(Mage::getUrl(‘*/*/post’));  // If you want we can set the .html form action here

          }

}
?>