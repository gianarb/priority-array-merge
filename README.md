# Priority merge array
[![Build Status](https://travis-ci.org/gianarb/priority-array-merge.svg)](https://travis-ci.org/gianarb/priority-array-merge)
This lib help you to merge two array with key priority

```php
<?php
$mergeManager = new PriorityArray();
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
$mergeManager->setMapPriority($first, $second);
$arr1 = [
    'companyId' => '012',
    'companyCode' => 'B353sf',
    'companyName' => 'Fox',
];
$arr2 = [
    'companyId' => '024',
    'companyCode' => 'A352gh',
    'companyName' => 'BBC',
];
var_dump($mergeManager->merge($arr1, $arr2));
// output ["companyId"=>"024", "companyCode": "B353sf", "companyName": "Fox"]
```

## Benchamarks
```
GianArb\Benchmarks\Util\ArrayMergeEvent
    Method Name                       Iterations    Average Time      Ops/second
    -------------------------------  ------------  --------------    -------------
    mergeTwoArrayWithNativeFunction: [1,000     ] [0.0000039789677] [251,321.46923]
    mergeTwoArrayWithPriority      : [1,000     ] [0.0000096676350] [103,437.91462]
```
