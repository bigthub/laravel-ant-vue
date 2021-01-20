<?php

/**
 * 获取无限分级
 * @param int $items 数据源
 * @param string $pid 父类键值
 * @param string $son 子类键名
 * @return array
 */
function genTree($items,$pid ="pid",$son="children") {
    $map  = [];
    $tree = [];
    foreach ($items as &$it){
        $map[$it['id']] = &$it;
    }
    foreach ($items as &$it){
        $parent = &$map[$it[$pid]];
        if($parent) {
            $parent[$son][] = &$it;
        }else{
            $tree[] = &$it;
        }
    }
    return $tree;
}

