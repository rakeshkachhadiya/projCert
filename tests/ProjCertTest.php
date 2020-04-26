<?php

namespace SebastianBergmann\projCert;

use PHPUnit\Framework\TestCase;

class IntlFormatterTest extends TestCase
{
   
    public function testMoneyObjectCanBeFormattedAsString()
    {
        $this->assertEquals('1,00 €', '1,00 €');
    }
}
