<?php
namespace App\FlatListDepth\Test;

use PHPUnit\Framework\TestCase;
use App\FlatListDepth\Nest;

class NestTest extends TestCase
{
    /**
     * @covers Nest::incrementalDepth
     */
    public function testIncrementalDepth()
    {
        $this->assertEquals([1, [2]], Nest::incrementalDepth([1, 2]));
        $this->assertEquals(["dog", ["cat", ["cow"]]], Nest::incrementalDepth(["dog", "cat", "cow"]));
        $this->assertEquals([1, [3, [2, [6]]]], Nest::incrementalDepth([1, 3, 2, 6]));
        $this->assertEquals( ["undefined", ["null", ["null", ["null", ["null"]]]]], Nest::incrementalDepth(["undefined", "null", "null", "null", "null"]));
        $this->assertEquals([1, [[6, 2], [8, ['begginer', ['programmer', [['php', ['is', 'best']]]]]]]], Nest::incrementalDepth([1,[6,2],8,'begginer','programmer',['php',['is','best']]]));

    }
}
