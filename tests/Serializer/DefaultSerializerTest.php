<?php

namespace App\Tests\Serializer;

use App\Serializer\DefaultSerializer;
use PHPUnit\Framework\TestCase;

/**
 * Default serializer tester.
 *
 * @package App\Tests\Serializer
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class DefaultSerializerTest extends TestCase
{
    /** @var DefaultSerializer */
    private $serializer;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->serializer = new DefaultSerializer();
    }

    /**
     * Should return the same data.
     */
    public function testTheSameData()
    {
        $randomNumber = rand();

        $this->assertEquals($randomNumber, $this->serializer->serialize($randomNumber));
    }
}