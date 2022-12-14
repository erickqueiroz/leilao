<?php declare(strict_types=1);

namespace Application\Types;

/**
 * Interface Document
 * @package Application\Types
 */
interface Document
{
    /**
     * Returns a masked string
     *
     * @return string
     */
    public function masked(): string;

    /**
     * Returns an unmasked string
     *
     * @return string
     */
    public function unmasked(): string;
}
