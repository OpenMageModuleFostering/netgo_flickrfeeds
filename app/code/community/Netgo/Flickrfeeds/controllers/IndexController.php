<?php
class Netgo_Flickrfeeds_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Flickr Feeds"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("flickr feeds", array(
                "label" => $this->__("Flickr Feeds"),
                "title" => $this->__("Flickr Feeds")
		   ));

      $this->renderLayout(); 
	  
    }
}