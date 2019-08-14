<?php
class Netgo_Flickrfeeds_Model_Adminhtml_System_Config_Source_Viewmode
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
		
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('List')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Grid')),
        );
    }

}