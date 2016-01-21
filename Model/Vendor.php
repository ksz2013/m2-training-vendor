<?php
namespace Training\Vendor\Model;

use Training\Vendor\Api\Data\VendorInterface;
use Magento\Framework\DataObject\IdentityInterface;

/**
 * Vendor Model
 *
 * @method \Training\Vendor\Model\Vendor _getResource()
 * @method \Training\Vendor\Model\ResourceModel\Vendor getResource()
 */
class Vendor extends \Magento\Framework\Model\AbstractModel // not using it for the moment implements VendorInterface, IdentityInterface
{

    /**
     * Training vendor cache tag
     */
    const CACHE_TAG = 'training_vendor';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Training\Vendor\Model\ResourceModel\Vendor');
    }

    /**
     * Get identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
