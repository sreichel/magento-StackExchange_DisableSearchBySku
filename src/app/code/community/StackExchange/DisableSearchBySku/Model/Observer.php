<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_DisableSearchBySku
 */

class StackExchange_DisableSearchBySku_Model_Observer extends Mage_Core_Model_Observer
{
    //the product list block name in layout
    const RESULT_BLOCK_NAME = 'search_result_list';

    /**
     * Disable search by SKU for specific store
     *
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function disableSkuSearch(Varien_Event_Observer $observer)
    {
        if (Mage::getStoreConfigFlag('catalog/frontend/disable_search')) {
            /** @var Mage_Catalog_Block_Product_List $block */
            $block = Mage::app()->getLayout()->getBlock(self::RESULT_BLOCK_NAME);
            if ($block) {
                if ($collection = $block->getLoadedProductCollection()) {
                    $query = Mage::app()->getRequest()->getParam('q');
                    $collection->addFieldToFilter('sku', array('nlike' => "%{$query}%"));
                }
            }
        }
    }
}
