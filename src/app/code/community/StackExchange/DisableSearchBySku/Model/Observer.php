<?php
/**
 * Magento-Module
 *
 * @author      Sven Reichel <github-sr@hotmail.com>
 * @category    StackExchange
 * @package     StackExchange_DisableSearchBySku
 */

/**
 * Class StackExchange_DisableSearchBySku_Model_Observer
 * @SuppressWarnings(PHPMD.CamelCaseClassName)
 */
class StackExchange_DisableSearchBySku_Model_Observer
{
    /**
     * The product list block name in layout
     */
    const RESULT_BLOCK_NAME = 'search_result_list';

    /**
     * Disable search by SKU for specific store
     *
     * @param Varien_Event_Observer $observer
     * @return void
     * @SuppressWarnings(PHPMD.StaticAccess)
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function disableSkuSearch(Varien_Event_Observer $observer)
    {
        if (Mage::getStoreConfigFlag('catalog/frontend/disable_search')) {
            /** @var Mage_Catalog_Block_Product_List $block */
            $block = Mage::app()->getLayout()->getBlock(self::RESULT_BLOCK_NAME);
            if ($block) {
                $collection = $block->getLoadedProductCollection();
                if ($collection) {
                    $query = Mage::app()->getRequest()->getParam('q');
                    $collection->addFieldToFilter('sku', ['nlike' => "%{$query}%"]);
                }
            }
        }
    }
}
