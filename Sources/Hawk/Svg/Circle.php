<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Circle extends Balise
    {
        protected $_tagName = 'circle';
        protected $_mappedArgument = array(
            'cx',
            'cy',
            'r',
            'class'
        );
    }
}
 