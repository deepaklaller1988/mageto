<?php
class Gamestore_Gamestoremodule_IndexController extends Mage_Adminhtml_Controller_Action
{  
    public function indexAction()
    {
        $this->loadLayout();
         
        $block = $this->getLayout()->createBlock('core/text', 'green-block')->setText('<h1>Game store page</h1>');
        $this->_addContent($block);
         
        $this->_setActiveMenu('gamestore_menu')->renderLayout();      
    }   
}

?>