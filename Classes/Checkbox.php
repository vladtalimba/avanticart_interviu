<?php
    class Checkbox extends FormFieldManager{

        protected $name;

        // Constructor.
        public function __construct($name)
        {
            // Call parent constructor. Set the name attribute.
            parent::__construct($name);
        }

        public function addSelf(){
            $html = '';
            // Add label.
            $html = sprintf('<label for="%s"></label>', $this->name);
            // Create an input tag. Add the name and other attributes dynamically.
            $html .= sprintf('<input type="checkbox" name="%s" id="%s" placeholder="%s">', $this->name, $this->name, $this->name);
            $html .= sprintf('</input>');
            return $html;
        }
    }
?>