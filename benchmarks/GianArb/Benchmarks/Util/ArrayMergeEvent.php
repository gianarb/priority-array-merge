<?php
namespace GianArb\Benchmarks\Util;

use Athletic\AthleticEvent;

class ArrayMergeEvent extends AthleticEvent
{
    private $menager;

    public function setUp()
    {
        $this->manager = new \GianArb\Util\PriorityArray();
        $first = [
            'companyId' => 0,
            'companyCode' => 1,
            'companyName' => 1,
        ];
        $second = [
            'companyId' => 1,
            'companyCode' => 0,
            'companyName' => 0,
        ];
        $this->manager->setMapPriority($first, $second);
    }

    /**
     * @iterations 1000
     */
    public function mergeTwoArrayWithNativeFunction()
    {
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
        array_merge($arr1, $arr2);
    }

    /**
     * @iterations 1000
     */
    public function mergeTwoArrayWithPriority()
    {
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
        $this->manager->merge($arr1, $arr2);
    }
}
