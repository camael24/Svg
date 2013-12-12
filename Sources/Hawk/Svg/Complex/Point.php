<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class Point implements Pointable
    {
        private $_path = array();

        public function __construct($x, $y)
        {
            $this->_path = array(
                'x' => $x,
                'y' => $y
            );
        }

        public function getModifier()
        {
        }


        public function path()
        {
            return $this->_path['x'] . ',' . $this->_path['y'];
        }
    }
}
