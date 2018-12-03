<?php
/**
 * Created by PhpStorm.
 * User: ufuk
 * Date: 11/26/18
 * Time: 6:08 PM
 */

require __DIR__ . '/../vendor/autoload.php';

use Compare\Object\Gte;
use Compare\Object\Lte;
use Compare\Validation;

$data = json_decode('{
          "userId" : 12,
          "id": 199,
          "title": "numquam repellendus a magnam",
          "completed": true
        }');

$schema = json_decode('{
  "definitions": {},
  "$schema": "http://json-schema.org/draft-07/schema#",
  "$id": "http://example.com/root.json",
  "type": "object",
  "title": "The Root Schema",
  "required": [
    "userId",
    "id",
    "title",
    "completed"
  ],
  "properties": {
    "userId": {
      "$id": "#/properties/userId",
      "type": "integer",
      "title": "The Userid Schema",
      "default": 0,
      "examples": [
        10
      ]
    },
    "id": {
      "$id": "#/properties/id",
      "type": "integer",
      "title": "The Id Schema",
      "default": 0,
      "examples": [
        199
      ]
    },
    "title": {
      "$id": "#/properties/title",
      "type": "string",
      "title": "The Title Schema",
      "default": "",
      "examples": [
        "numquam repellendus a magnam"
      ],
      "pattern": "^(.*)$"
    },
    "completed": {
      "$id": "#/properties/completed",
      "type": "boolean",
      "title": "The Completed Schema",
      "default": false,
      "examples": [
        true
      ]
    }
  }
}');

$validator = new Validation();

echo '### Schema Validator';
echo '<br/>';
if ($validator->isValid($data, $schema)) {
    echo 'is valid';
}

echo '<br/><br/>';

$number1 = 100.00;
$number2 = 200.12;
$sum = 300.12;
$remaing = 100.12;


echo '### Sum Equal';
echo '<br/>';
if ($validator->sumEqual($number1, $number2, $sum)) {
    echo 'its ok!';
} else {
    echo ':(';
}
echo '<br/><br/>';


echo '### Remaing Equal';
echo '<br/>';
if ($validator->remaingEqual($number1, $number2, $remaing)) {
    echo 'its ok!';
} else {
    echo ':(';
}
echo '<br/><br/>';


echo '### Absolute Remaing Equal';
echo '<br/>';
if ($validator->absRemaingEqual($number1, $number2, $remaing)) {
    echo 'its ok!';
} else {
    echo ':(';
}
echo '<br/><br/>';


echo '### Greater Than Equal';
echo '<br/>';
echo $validator->compare($number1, $number2, new Gte()) ? 'true' : 'false';
echo '<br/><br/>';


echo '### Less Than Equal';
echo '<br/>';
echo $validator->compare($number1, $number2, new Lte()) ? 'true' : 'false';






