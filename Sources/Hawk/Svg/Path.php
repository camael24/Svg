<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Path extends Balise
    {
        protected $_tagName = 'path';
        protected $_mappedArgument = array(
            'd',
            'class'
        );
    }
}
 