<?php

namespace App\Serializer;

/**
 * Default serializer.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class DefaultSerializer extends BaseSerializer
{
    /**
     * @inheritDoc
     */
    protected function mustSerialize($data): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    protected function transform($data)
    {
        return $data;
    }
}