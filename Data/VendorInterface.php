<?php
namespace Training\Vendor\Api\Data;

/**
 * Training vendor interface.
 * @api
 */
interface VendorInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const VENDOR_ID     = 'vendor_id';
    const NAME          = 'name';
    const EMAIL         = 'email';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';
    const COMMENT       = 'comment';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Get email
     *
     * @return string|null
     */
    public function getEmail();


    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment();

    /**
     * Set ID
     *
     * @param int $id
     * @return VendorInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $name
     * @return VendorInterface
     */
    public function setName($name);

    /**
     * Set email
     *
     * @param string $email
     * @return VendorInterface
     */
    public function setTitle($email);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return VendorInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return VendorInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return VendorInterface
     */
    public function setIsActive($isActive);

    /**
     * Set comment
     *
     * @param string $comment
     * @return VendorInterface
     */
    public function setContent($comment);
}
