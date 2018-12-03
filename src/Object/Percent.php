<?php
/**
 * Created by PhpStorm.
 * User: ufuk
 * Date: 11/30/18
 * Time: 3:55 PM
 */

namespace Compare\Object;

use Compare\OperatorAbstract;

class Percent extends OperatorAbstract
{
    /**
     * @param $param1
     * @param $param2
     * @return bool
     */
    public function compare($param1, $param2)
    {
        return ($param2 / 100) * $param1;
    }

}