<?php
    class Inputfield extends FormFieldManager{
        
        protected $name;
        // Constructor.
        public function __construct($name)
        {
            // Call parent constructor. Set the name through the parent class.
            parent::__construct($name);
        }

        public function addSelf(){
            $html = '';
            // Add label
            $html = sprintf('<label for="%s"></label>', $this->name);
            // Add input tag. Set the name dynamically.
            $html .= sprintf('<input type="text" name="%s" id="%s" placeholder="%s">', $this->name, $this->name, $this->name);
            $html .= sprintf('</input>');
            return $html;
        }

    }
?>