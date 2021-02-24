<?php

namespace App\Serializer;

/**
 * Serializer of number multiples of five.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleFiveSerializer extends BaseSerializer
{
    /**
     * @inheritDoc
     */
    protected function mustSerialize($data): bool
    {
        return $data % 5 === 0;
    }

    /**
     * @inheritDoc
     */
    protected function transform($data)
    {
        return 'Five';
    }
}