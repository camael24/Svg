<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class ZClosePath implements Pointable
    {
        private $_mAbsolute = 'Z';
        private $_mRelative = 'z';

        public function __construct($relative = false)
        {
            $this->_relative = $relative;
        }

        public function getModifier()
        {
            if ($this->_relative === true)
                return $this->_mRelative;

            return $this->_mAbsolute;
        }

        public function path()
        {
            return $this->getModifier();
        }

        public function __toString()
        {
            return $this->path();
        }
    }
}
