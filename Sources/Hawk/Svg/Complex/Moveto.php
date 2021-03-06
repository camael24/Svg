<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class Moveto implements Pointable
    {
        private $_mAbsolute = 'M';
        private $_mRelative = 'm';
        private $_path = array();
        private $_relative = false;

        public function __construct($x, $y, $relative = false)
        {
            $this->_relative = $relative;
            $this->_path = array(
                'x' => $x,
                'y' => $y
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
            return $this->getModifier() . $this->_path['x'] . ',' . $this->_path['y'];
        }

        public function __toString()
        {
            return $this->path();
        }
    }
}
