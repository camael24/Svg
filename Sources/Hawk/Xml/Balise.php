<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 11/12/13
 * Time: 16:06
 */
namespace Hawk\Xml {
    class Balise
    {
        protected $_tagName = null;
        protected $_mappedArgument = array();
        protected $_argument = array();
        protected $_content = '';
        protected $_pre = '';
        protected $_app = '';

        public function __construct()
        {
            $argument = func_get_args();
            $this->parse($argument);
            $this->construct();
        }

        public function parse(Array $argument)
        {
            if (!empty($argument))
                if (is_array($argument[0]))
                    $this->setAttributes($argument[0]);
                else
                    foreach ($this->_mappedArgument as $i => $name)
                        if (array_key_exists($i, $argument))
                            $this->setAttribute($name, $argument[$i]);
        }

        public function construct()
        {
            return;
        }

        public function setAttributes(Array $array)
        {
            $this->_argument = $array;
        }

        public function setAttribute($name, $value)
        {
            $this->_argument[$name] = strval($value);
        }

        public function addContent($content)
        {
            $this->_content .= "\t" . strval($content) . "\n";
        }

        public function getAttributesAsList()
        {
            $attr = array();

            foreach ($this->_argument as $name => $value)
                $attr[] = $name . '="' . $value . '"';

            return implode(' ', $attr);
        }


        public function render()
        {
            $out = '<' . $this->_tagName . ' ' . ((!empty($this->_argument)) ? '' . $this->getAttributesAsList() : '');


            if (!empty($this->_content))
                $out .= '>' . "\n" . $this->_pre . $this->_content . $this->_app . '</' . $this->_tagName . '>';
            else
                $out .= ' />';

            return $out;
        }

        public function __toString()
        {
            return $this->render();
        }
    }
}
 