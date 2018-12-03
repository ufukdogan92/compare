<?php
/**
 * Created by PhpStorm.
 * User: ufuk
 * Date: 11/30/18
 * Time: 3:49 PM
 */


namespace Compare {

    use Compare\Contract\IOperatorInterface;

    abstract class OperatorAbstract implements IOperatorInterface
    {
        /**
         * @param $param1
         * @param $param2
         * @return bool
         */
        public function compare($param1, $param2)
        {
            return $param1 == $param2;
        }
    }
}