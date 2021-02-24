<?php

namespace App\Serializer;

/**
 * Serializer of number multiples of three.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleThreeSerializer extends BaseSerializer
{
    /**
     * @inheritDoc
     */
    protected function mustSerialize($data): bool
    {
        return $data % 3 === 0;
    }

    /**
     * @inheritDoc
     */
    protected function transform($data)
    {
        return 'Three';
    }
}