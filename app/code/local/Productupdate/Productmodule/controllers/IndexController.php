<?php
class Productupdate_Productmodule_IndexController extends Mage_Adminhtml_Controller_Action
{  
    public function indexAction()
    {
        $this->loadLayout();
         
        $block = $this->getLayout()->createBlock('core/text', 'green-block')->setText('<h1>Update you product stock quantity by importing csv file</h1>');
        $this->_addContent($block);
         
        $this->_setActiveMenu('product_menu')->renderLayout();     
echo $this->getLayout()->createBlock('core/template')->setTemplate('Productmodule/upload_csv.phtml')->toHtml();		
    }   
}

?>