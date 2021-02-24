<?php

namespace App;

use App\Serializer\MultipleFiveSerializer;
use App\Serializer\MultipleThreeAndFiveSerializer;
use App\Serializer\MultipleThreeSerializer;
use App\Serializer\DefaultSerializer;

/**
 * Number renderer.
 *
 * @package App
 */
class NumberRenderer
{
    /**
     * Render a number.
     *
     * @param int $number
     *
     * @return mixed
     */
    public function render(int $number)
    {
        $firstSerializer = new MultipleThreeAndFiveSerializer();

        $firstSerializer
            ->setNext(new MultipleThreeSerializer())
            ->setNext(new MultipleFiveSerializer())
            ->setNext(new DefaultSerializer());

        return $firstSerializer->serialize($number);
    }
}