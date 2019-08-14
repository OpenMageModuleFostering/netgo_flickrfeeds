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
class Netgo_Flickrfeeds_Block_Index extends Mage_Core_Block_Template{
    public function __construct(){  
        parent::__construct();
		$helper = Mage::helper('flickrfeeds');
	}
}