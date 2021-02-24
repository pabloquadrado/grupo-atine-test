<?php

namespace App\Tests;

use App\NumberRenderer;
use PHPUnit\Framework\TestCase;

/**
 * Number renderer tester.
 *
 * @package App\Tests
 *
 * @author Pablo R. Quadrado <dev.pabloquadrado@gmail.com>
 */
class NumberRendererTest extends TestCase
{
    /** @var NumberRenderer  */
    private $numberRenderer;

    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        $this->numberRenderer = new NumberRenderer();
    }

    /**
     * Should return the same data.
     */
    public function testTheSameData()
    {
        $number = 2;

        $this->assertEquals($number, $this->numberRenderer->render($number));
    }

    /**
     * Should return 'ThreeAndFive' instead the number.
     */
    public function testThreeAndFiveInsteadTheNumber()
    {
        $this->assertEquals('ThreeAndFive', $this->numberRenderer->render(15));
    }

    /**
     * Should return 'Three' instead the number.
     */
    public function testThreeInsteadTheNumber()
    {
        $this->assertEquals('Three', $this->numberRenderer->render(3));
    }

    /**
     * Should return 'Five' instead the number.
     */
    public function testFiveInsteadTheNumber()
    {
        $this->assertEquals('Five', $this->numberRenderer->render(5));
    }
}