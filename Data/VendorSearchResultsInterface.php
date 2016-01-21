<?php
namespace Training\Vendor\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for training vendor search results.
 * @api
 */
interface VendorSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get vendore list.
     *
     * @return \Training\Vendor\Api\Data\VendorInterface[]
     */
    public function getItems();

    /**
     * Set blocks list.
     *
     * @param \Magento\Cms\Api\Data\BlockInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
