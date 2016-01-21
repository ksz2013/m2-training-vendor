<?php
namespace Training\Vendor\Model\ResourceModel;

/**
 * Training vendor model
 */
class Vendor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init(
            'training_vendor_entity',
            'vendor_id'
        );
    }
}
