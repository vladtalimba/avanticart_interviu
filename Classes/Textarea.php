<?php 
    class Textarea extends FormFieldManager{
        protected $name;

        // Constructor.
        public function __construct($name)
        {
            // Call parent class constructor. Set the name attribute.
            parent::__construct($name);
        }

        public function addSelf(){
            $html = '';
            // Add label.
            $html = sprintf('<label for="%s"></label>', $this->name);
            // Open a textarea tag. Add the name dynamically.
            $html .= sprintf('<textarea name="%s" id="%s" placeholder="%s">', $this->name, $this->name, $this->name);
            // Close tag.
            $html .= sprintf('</textarea>');
            return $html;
        }
    }
?>