<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Line extends Balise
    {
        protected $_tagName = 'line';
        protected $_mappedArgument = array(
            'x1',
            'y1',
            'x2',
            'y2',
            'class'
        );
    }
}
 