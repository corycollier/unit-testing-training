<?php

namespace Testing;

use \PHPUnit\Framework\TestCase;
use Application\Model;

class ModelTest extends TestCase
{

    /**
     * Tests the GetId

     * @dataProvider provideGetId
     */
    public function testGetId()
    {
        $sut = new \Application\Model;

    }

    /**
     * Data Provider for getGetId.
     *
     * @return array
     *   An array of data to use for testing.
     */
    public function provideGetId()
    {
        return [
            'simple test' => [
            ],

        ];
    }
}