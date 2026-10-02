<?php

namespace App\domain\models\ValueObject;

use App\library\models\Validation\ValidInterface;
use App\library\models\Validation\ValidValueTrait;

class ValidEmailValue extends EmailValue implements ValidInterface
{
    use ValidValueTrait;
}
