<?php
class Productupdate_Productmodule_Block_Adminhtml_Myblock extends Mage_Adminhtml_Block_Template

{

          public function __construct() {

                   parent::__construct();

                   $this->setTemplate(Productmodule/upload_csv.phtml’);

                   //$this->setFormAction(Mage::getUrl(‘*/*/post’));  // If you want we can set the .html form action here

          }

}
?>