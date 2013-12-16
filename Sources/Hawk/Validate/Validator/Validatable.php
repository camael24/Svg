<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 13/12/13
 * Time: 10:27
 */
namespace Hawk\Validate\Validator {
    interface Validatable
    {
        public function __construct($operateur, $value);

        public function isValid();

        public function setData($data);
    }
}
 