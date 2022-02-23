<?php
namespace Seepossible\Custom\Api\Data;

/**
 * Blog interface
 */
interface BlogInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID          = 'id';
    const TITLE       = 'title';
    const DESCRIPTION = 'description';
    const IS_ACTIVE   = 'is_active';
    const CREATED_AT  = 'created_at';
    const UPDATED_AT  = 'updated_at';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setId($id);

    /**
     * Set title
     *
     * @param string $title
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setTitle($title);

    /**
     * Set description
     *
     * @param string $description
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setDescription($description);

    /**
     * Set creation time
     *
     * @param string $createdAt
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Set update time
     *
     * @param string $updatedAt
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Seepossible\Custom\Api\Data\BlogInterface
     */
    public function setIsActive($isActive);
}
