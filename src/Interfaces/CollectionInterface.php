<?php

declare(strict_types=1);

namespace Intervention\Image\Interfaces;

use Traversable;

interface CollectionInterface extends Traversable
{
    /**
     * Determine if the collection has item at given key
     *
     * @param  $key
     * @return bool
     */
    public function has( $key): bool;

    /**
     * Add item to collection
     *
     * @param $item
     * @return CollectionInterface
     */
    public function push($item): self;

    /**
     * Return item for given key or return default is key does not exist
     *
     * @param  $key
     * @param $default
     * @return mixed
     */
    public function get( $key, $default = null);

    /**
     * Return item at given numeric position starting at 0
     *
     * @param int $key
     * @param $default
     * @return mixed
     */
    public function getAtPosition(int $key = 0, $default = null);

    /**
     * Return first item in collection
     *
     * @return mixed
     */
    public function first();

    /**
     * Return last item in collection
     *
     * @return mixed
     */
    public function last();

    /**
     * Return item count of collection
     *
     * @return int
     */
    public function count(): int;

    /**
     * Empty collection
     *
     * @return CollectionInterface
     */
    public function empty(): self;

    /**
     * Transform collection as array
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Extract items based on given values and discard the rest.
     *
     * @param int $offset
     * @param null|int $length
     * @return CollectionInterface
     */
    public function slice(int $offset, ?int $length = 0): self;
}
