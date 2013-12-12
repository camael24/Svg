<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:46
 */
namespace Hawk\Svg\Complex {
    class Container
    {
        private $_points = array();

        public function __construct()
        {
            $this->_points = func_get_args();
        }

        public function get()
        {

            $chain = array();

            foreach ($this->_points as $point)
                if ($point instanceof Pointable)
                    $chain [] = $point->path();

            return implode(' ' , $chain);
        }

        public function __toString()
        {
            return $this->get();
        }
    }
}
 