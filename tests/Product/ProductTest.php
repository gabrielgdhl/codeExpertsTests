<?php

namespace Test\Product;

use Code\Product\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    private $product;

    public function setUp()
    {
        $this->product = new Product();
    }

    public function testIsInstantied()
    {
        $this->assertInstanceOf(Product::class, $this->product);
    }

    public function testIfNameIsSet()
    {
        $this->product->setName('Mesa de madeira');

        $this->assertEquals('Mesa de madeira', $this->product->getName());
    }

    public function testIfPriceIsSet()
    {
        $this->product->setPrice(1000.1);

        $this->assertEquals(1000.1, $this->product->getPrice());
        $this->assertIsFloat($this->product->getPrice());
    }

    public function testProductIsAvailable()
    {
        $this->assertIsInt($this->product->getProductAvailable());
    }

    public function testDeleteProductIsComplete()
    {
        $this->assertTrue($this->product->delete());
    }

    public function testProductWasSold()
    {
        $this->assertTrue($this->product->wasSold());
    }
}