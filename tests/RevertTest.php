<?php 

use PHPUnit\Framework\TestCase;
use App\RevertCharacters;

class RevertTest extends TestCase
{
    public function testRevert()
    {
        $test = RevertCharacters::revert('Hello,world!');
        $this->assertSame($test, 'olleH,dlrow!');
    }
}