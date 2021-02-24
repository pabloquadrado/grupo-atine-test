<?php

namespace App\Tests\Serializer;

use App\Serializer\DefaultSerializer;
use App\Serializer\MultipleFiveSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Multiple five serializer tester.
 *
 * @package App\Tests\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleFiveSerializerTest extends TestCase
{
    /** @var MultipleFiveSerializer */
    private $serializer;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->serializer = new MultipleFiveSerializer();
    }

    /**
     * Should return 'Five' instead the number.
     */
    public function testFiveInsteadTheNumber()
    {

        $this->assertEquals('Five', $this->serializer->serialize(5));
    }

    /**
     * Should return the same number, without serialize.
     */
    public function testTheSameData()
    {
        $this->serializer->setNext(new DefaultSerializer());

        $number = 7;

        $this->assertEquals($number, $this->serializer->serialize($number));
    }
}