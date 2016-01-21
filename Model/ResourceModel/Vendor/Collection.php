<?php
namespace Training\Vendor\Model\ResourceModel\Vendor;

/**
 * Training Vendor Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Training\Vendor\Model\Vendor', 'Training\Vendor\Model\ResourceModel\Vendor');
    }
}
