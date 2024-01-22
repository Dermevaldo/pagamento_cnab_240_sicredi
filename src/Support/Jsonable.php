<?php

namespace Dermevaldo\Pagamento\Support;

/**
 * Interface Jsonable
 * @package Dermevaldo\Pagamento\Support
 */
interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param  int $options
     * @return string
     */
    public function toJson($options = 0);
}
