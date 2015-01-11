<?php
namespace GianArb\Util;

use PHPUnit_Framework_TestCase;
use GianArb\Util\PriorityArray;

class PriorityArrayTest extends PHPUnit_Framework_TestCase
{
    public function testPriorityArrayExist() {
        $mergeManager = new PriorityArray();
        $this->assertInstanceOf("GianArb\\Util\\PriorityArray", $mergeManager);
    }

    public function testMerge() {
        $mergeManager = new PriorityArray();
        $first = array(
            'companyId' => 0,
            'companyCode' => 1,
            'companyName' => 1,
        );
        $second = array(
            'companyId' => 1,
            'companyCode' => 0,
            'companyName' => 0,
        );
        $mergeManager->setMapPriority($first, $second);
        $arr1 = array(
            'companyId' => '012',
            'companyCode' => 'B353sf',
            'companyName' => 'Fox',
        );
        $arr2 = array(
            'companyId' => '024',
            'companyCode' => 'A352gh',
            'companyName' => 'BBC',
        );
        $this->assertEquals(array(
            "companyId" => "024",
            "companyCode" => "B353sf",
            "companyName" => "Fox",
        ), $mergeManager->merge($arr1, $arr2));
    }
}
