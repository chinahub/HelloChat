<?php
namespace components\helpers;

class ArrayHelper
{
    /**
     * array 数据的 key 重命名
     * @param  array $array [description]
     * @param  array $keyName ['旧的key' => '新的key']
     * @return array          [description]
     */
    public static function renameKey($array = [], $keyName = [])
    {
        foreach ($keyName as $key => $value) {
            $array[$value] = $array[$key];
            unset($array[$key]);
        }
        return $array;
    }

    /**
     * 跟据指定数组值排序
     * @param array $data 排序数组
     * @param string $key 指定数组值的键
     * @param int $sort 指定排序类型
     * @return mixed
     */
    public static function arraySortByKey($data, $key, $sort = SORT_ASC)
    {
        $tmp = [];
        foreach ($data as $value) {
            $tmp[] = $value[$key];
        }
        !in_array($sort, array(SORT_ASC, SORT_DESC, SORT_REGULAR, SORT_NUMERIC, SORT_STRING)) and $sort = SORT_ASC;
        array_multisort($tmp, $sort, $data);
        return $data;
    }

    /**
     * 根据主键ID（$id）获取它的所有的子集
     * @param array $array
     * @param $id
     * @param string $pk
     * @param string $childrenField
     * @return array
     */
    public static function getTreeChildren(array $array, $id, $pk = 'id', $childrenField = 'parent_id')
    {
        static $arrTree = []; //使用static代替global
        foreach ($array as $value) {
            if ($value[$childrenField] == $id) {
                $arrTree[] = $value;
                self::getTreeChildren($array, $value[$pk], $pk, $childrenField);
            }
        }
        return $arrTree;
    }


    /**
     * 数组中移除某个键值
     * @param array $array
     * @param $key
     * @return array
     */
    public static function removeKey(array $array, $key = '')
    {
        if (!is_array($key)) {
            $key = [$key];
        }
        return array_diff_key($array, array_flip($key));
    }

    public static function merge($a, $b)
    {
        $args = func_get_args();
        $res = array_shift($args);
        while (!empty($args)) {
            $next = array_shift($args);
            foreach ($next as $k => $v) {
                if (is_int($k)) {
                    if (isset($res[$k])) {
                        $res[] = $v;
                    } else {
                        $res[$k] = $v;
                    }
                } elseif (is_array($v) && isset($res[$k]) && is_array($res[$k])) {
                    $res[$k] = self::merge($res[$k], $v);
                } else {
                    $res[$k] = $v;
                }
            }
        }

        return $res;
    }
}