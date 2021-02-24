<?php

namespace App\Tests\Serializer;

use App\Serializer\DefaultSerializer;
use App\Serializer\MultipleThreeAndFiveSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Multiple three and five serializer tester.
 *
 * @package App\Tests\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleThreeAndFiveSerializerTest extends TestCase
{
    /** @var MultipleThreeAndFiveSerializer */
    private $serializer;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->serializer = new MultipleThreeAndFiveSerializer();
    }

    /**
     * Should return 'ThreeAndFive' instead the number.
     */
    public function testThreeAndFiveInsteadTheNumber()
    {
        $this->assertEquals('ThreeAndFive', $this->serializer->serialize(15));
    }

    /**
     * Should return the same number, without serialize.
     */
    public function testTheSameData()
    {
        $this->serializer->setNext(new DefaultSerializer());

        $number = 6;

        $this->assertEquals($number, $this->serializer->serialize($number));
    }
}