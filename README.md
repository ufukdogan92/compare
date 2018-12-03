# Php Compare Helper


## Requirements

This plugin requires justinrainbow/json-schema


# Installation

Requiere

```json
"ufukdogan92/compare": "1.0.0"
```

or run

```sh
composer require ufukdogan92/compare
```

# Using

```php
<?php

use Compare\Validation;

$number1 = 100.00;
$number2 = 200.12;

echo '### Greater Than Equal';
echo '<br/>';
echo $validator->compare($number1, $number2, new \Compare\Object\Gte()) ? 'true' : 'false';
echo '<br/><br/>';

echo '### Less Than Equal';
echo '<br/>';
echo $validator->compare($number1, $number2, new \Compare\Object\Lte()) ? 'true' : 'false';



```

