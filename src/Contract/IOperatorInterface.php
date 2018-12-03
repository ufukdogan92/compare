<?php
/**
 * Created by PhpStorm.
 * User: ufuk
 * Date: 11/30/18
 * Time: 3:49 PM
 */


namespace Compare\Contract {

    interface IOperatorInterface
    {
        /**
         * @param $param1
         * @param $param2
         * @return mixed
         */
        public function compare($param1, $param2);
    }
}