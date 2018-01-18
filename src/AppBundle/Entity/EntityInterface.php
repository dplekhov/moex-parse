<?php

namespace AppBundle\Entity;

/**
 * Interface EntityInterface
 */
interface EntityInterface
{
    /**
     * Get entity ID.
     *
     * @return integer
     */
    public function getId();

    /**
     * Get entity activity.
     *
     * @return bool
     */
    public function getActive();

    /**
     * Set entity activity flag
     *
     * @param bool $active Activity flag
     */
    public function setActive($active);

    /**
     * Get entity title
     *
     * @return string
     */
    public function __toString();
}
