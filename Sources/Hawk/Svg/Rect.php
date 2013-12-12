<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Rect extends Balise
    {
        protected $_tagName = 'rect';
        protected $_mappedArgument = array(
            'x',
            'y',
            'width',
            'height',
            'class',
            'rx',
            'ry'
        );
    }
}
 