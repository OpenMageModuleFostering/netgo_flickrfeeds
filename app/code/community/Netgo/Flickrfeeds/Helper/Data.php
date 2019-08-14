<?php
/***************************************
 *** Facebook Page Post ***
 ***************************************
 *
 * @copyright   Copyright (c) 2015
 * @company     NetAttingo Technologies
 * @package     Netgo_Fbpagepost
 * @author 		NetGo
 * @dev			netattingomails@gmail.com
 *
 */
class Netgo_Flickrfeeds_Helper_Data extends Mage_Core_Helper_Abstract{
    public function __construct(){
		//Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getUrl());
	}
	public function viewmode(){
		$viewmode = Mage::getStoreConfig('flickrfeeds/flickrfeeds/viewmode', Mage::app()->getStore());
		return $viewmode;
		
	}
}
	 
	 