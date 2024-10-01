<?php
   abstract class FormFieldManager{
        
        protected $name;
        // Abstract class for all the fields.
        // Set the name and other attributes in the future through the constructor.
        public function __construct($name)
        {
            $this->name = $name;
        }

        // Function to be implemented by all children.
        abstract public function addSelf();
    }
?>