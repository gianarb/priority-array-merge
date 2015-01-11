<?php
namespace GianArb\Util;

class PriorityArray
{
    /**
     * Rule of Merge
     * @var array
     */
    protected $mapPriority;

    /**
     * Set map of priority
     * @param array $firstArrayMap
     * @param array $secondArrayMap
     * @return PriorityArray
     */
    public function setMapPriority(array $firstArrayMap, array $secondArrayMap){
        $this->mapPriority = array('first' => $firstArrayMap, 'second' => $secondArrayMap);
        return $this;
    }

    /**
     * Merge two array
     * @param array $firstArray
     * @param array $secondArray
     * @return array
     */
    public function merge(array $firstArray, array $secondArray)
    {
        foreach($firstArray as $keySingle => $value){
            if($this->mapPriority['first'][$keySingle]>=$this->mapPriority['second'][$keySingle] || !isset($secondArray[$keySingle])){
                $firstArray[$keySingle]=$value;
            } else {
                $firstArray[$keySingle]=$secondArray[$keySingle];
            }
        }
        return $firstArray;
    }
}
