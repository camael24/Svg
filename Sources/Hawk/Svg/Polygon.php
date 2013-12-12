<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Polygon extends Balise
    {
        protected $_tagName = 'polygon';
        protected $_mappedArgument = array(
            'points',
            'class'
        );
    }
}
 