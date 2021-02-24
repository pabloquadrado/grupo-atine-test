<?php

namespace App\Serializer;

/**
 * Serializer of number multiples of three and five.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleThreeAndFiveSerializer extends BaseSerializer
{
    /**
     * @inheritDoc
     */
    protected function mustSerialize($data): bool
    {
        return $data % 3 === 0 && $data % 5 === 0;
    }

    /**
     * @inheritDoc
     */
    protected function transform($data)
    {
        return 'ThreeAndFive';
    }
}