<?php

namespace App\Serializer;

/**
 * Base serializer.
 *
 * @package App\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
abstract class BaseSerializer implements Contract
{
    /** @var BaseSerializer $next Next serializer to be called. */
    private $next;

    /**
     * Set the property {@see BaseSerializer::$next}
     *
     * @param BaseSerializer $serializer
     *
     * @return BaseSerializer
     */
    public function setNext(BaseSerializer $serializer): BaseSerializer
    {
        $this->next = $serializer;
        return $serializer;
    }

    /**
     * @inheritdoc
     */
    public function serialize($data)
    {
        if ($this->mustSerialize($data)) {
            return $this->transform($data);
        }

        return $this->next->serialize($data);
    }

    /**
     * Defines if the data should be transformed.
     *
     * @param mixed $data
     *
     * @return bool
     */
    protected abstract function mustSerialize($data): bool;

    /**
     * Serialize the data.
     *
     * @param mixed $data
     *
     * @return mixed
     */
    protected abstract function transform($data);
}