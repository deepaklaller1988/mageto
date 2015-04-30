<?php
class Greenacorn_Greenmodule_IndexController extends Mage_Adminhtml_Controller_Action
{  
    public function indexAction()
    {
        $this->loadLayout();
         
        $block = $this->getLayout()->createBlock('core/text', 'green-block')->setText('<h1>My Custom Slider panel</h1>');
        $this->_addContent($block);
		 
         
        $this->_setActiveMenu('green_menu')->renderLayout();   
echo $this->getLayout()->createBlock('core/template')->setTemplate('Greenmodule/edit_form.phtml')->toHtml();		
    }   
	
}
