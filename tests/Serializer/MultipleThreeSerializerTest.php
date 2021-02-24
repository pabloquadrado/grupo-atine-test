<?php

namespace App\Tests\Serializer;

use App\Serializer\DefaultSerializer;
use App\Serializer\MultipleThreeSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Multiple three serializer tester.
 *
 * @package App\Tests\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class MultipleThreeSerializerTest extends TestCase
{
    /** @var MultipleThreeSerializer */
    private $serializer;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->serializer = new MultipleThreeSerializer();
    }

    /**
     * Should return 'Three' instead the number.
     */
    public function testThreeInsteadTheNumber()
    {
        $this->assertEquals('Three', $this->serializer->serialize(3));
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