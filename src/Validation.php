<?php
/**
 * Created by PhpStorm.
 * User: ufuk
 * Date: 11/26/18
 * Time: 6:04 PM
 */


namespace Compare;

use JsonSchema\Validator;

class Validation
{
    /**
     * @param $data
     * @param $schema
     * @return mixed
     */
    public static function isValid($data, $schema)
    {

        $validator = new Validator();

        $validator->validate($data, $schema);

        /** @var TYPE_NAME $validator */
        if ($validator->isValid()) {
            return true;
        }

        /** @var TYPE_NAME $validator */
        foreach ($validator->getErrors() as $error) {
            echo sprintf("[%s] %s\n", $error['property'], $error['message']);
        }

        return false;
    }

    /**
     * @param $param1
     * @param $param2
     * @param $equal
     * @return bool
     */
    public static function sumEqual($param1, $param2, $equal)
    {

        /** @var double $param2 */
        /** @var double $param1 */
        if ($param1 + $param2 != $equal) {
            return false;
        }

        return true;
    }

    /**
     * @param $param1
     * @param $param2
     * @param $equal
     * @return bool
     */
    public static function remaingEqual($param1, $param2, $equal)
    {

        /** @var double $param2 */
        /** @var double $param1 */
        if (($param1 - $param2) != $equal) {
            return false;
        }

        return true;
    }


    /**
     * @param $param1
     * @param $param2
     * @param $equal
     * @return bool
     */
    public static function absRemaingEqual($param1, $param2, $equal)
    {

        /** @var double $param2 */
        /** @var double $param1 */
        if (abs($param1 - $param2) != $equal) {
            return false;
        }

        return true;
    }

    /**
     * @param $param1
     * @param $param2
     * @param $operator
     * @return bool
     */
    public static function compare($param1, $param2, OperatorAbstract $operator)
    {
        return $operator->compare($param1, $param2);
    }

}