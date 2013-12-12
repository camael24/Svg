<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Svg extends Balise
    {
        protected $_tagName = 'svg';
        protected $_mappedArgument = array(
            'width',
            'height',
            'class'
        );


        public function prepend($content)
        {
            $this->_pre = $content;
        }

        public function append($content)
        {
            $this->_app = $content;
        }
    }
}
 