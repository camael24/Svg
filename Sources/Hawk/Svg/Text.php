<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:15
 */
namespace Hawk\Svg {
    use Hawk\Xml\Balise;

    class Text extends Balise
    {
        protected $_tagName = 'text';
        protected $_mappedArgument = array(
            'x',
            'y',
            'class'
        );

        public function __construct()
        {
            $argument = func_get_args();
            $label    = array_shift($argument);

            $this->addContent($label);
            $this->parse($argument);
        }
    }
}
 