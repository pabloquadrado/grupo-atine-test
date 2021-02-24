<?php

namespace App\Serializer;

/**
 * Serializer contract.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
interface Contract
{
    /**
     * Get data serialized.
     *
     * @param mixed $data
     *
     * @return mixed
     */
    public function serialize($data);
}