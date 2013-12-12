<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class VLineto implements Pointable
    {
        private $_mAbsolute = 'V';
        private $_mRelative = 'v';
        private $_path = array();
        private $_relative = false;

        public function __construct($y, $relative = false)
        {
            $this->_relative = $relative;
            $this->_path = array(
                'y' => $y,
            );
        }

        public function getModifier()
        {
            if ($this->_relative === true)
                return $this->_mRelative;

            return $this->_mAbsolute;
        }

        public function path()
        {
            return $this->getModifier() . $this->_path['y'];
        }

        public function __toString()
        {
            return $this->path();
        }
    }
}
