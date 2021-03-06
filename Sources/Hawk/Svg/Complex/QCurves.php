<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class QCurves implements Pointable
    {
        private $_mAbsolute = 'T';
        private $_mRelative = 't';
        private $_path = array();
        private $_relative = false;

        public function __construct($x1, $y1, $x2, $y2, $relative = false)
        {
            $this->_relative = $relative;
            $this->_path     = array(
                'x1' => $x1,
                'y1' => $y1,
                'x2' => $x2,
                'y2' => $y2,

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
            $out   = array();
            $out[] = $this->getModifier() . $this->_path['x1'] . ',' . $this->_path['y1'];
            $out[] = $this->_path['x2'] . ',' . $this->_path['y2'];

            return implode(' ', $out);
        }

        public function __toString()
        {
            return $this->path();
        }
    }
}
