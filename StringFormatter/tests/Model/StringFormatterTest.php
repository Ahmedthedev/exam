<?php

namespace Tests\Model;

use Model\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase
{
    /** @var  User */
    private $stringFormatter;

    /** {@inheritdoc} */
    public function setUp()
    {
        $this->stringFormatter = new StringFormatter('str');
    }

    /**
     * test testConcat
     */
    public function testConcat()
    {
        $this->assertSame('strlol', $this->stringFormatter->concat('lol'));
    }

    /**
     * test testcamelCase
     */
    public function testcamelCase()
    {
        $this->assertSame('strLol', $this->stringFormatter->camelCase('lol'));
    }

    /**
     * test testPrefix
     */
    public function testPrefix()
    {
        $this->assertSame('lolstr', $this->stringFormatter->prefix('lol'));
        $this->assertSame('lolStr', $this->stringFormatter->prefix('lol',true));
    }




}