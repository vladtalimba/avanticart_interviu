<?php
    include_once "Abstractions/FormFieldManager.php";

    class Form {

        // Create class properties.
        private $action;
        private $method;
        private $fields = [];

        // Constructor.
        public function __construct($action, $method){
            // Initialize passed variables.
            $this->action = $action;
            $this->method = $method;
        }
        
        public function addField($field){
            // Add each passed field into an array.
           $this->fields[] = $field->addSelf();
        }

        public function display(){
            // Build form tags.
            $html = '';
            $html = sprintf('<form method="%s" action="%d">', $this->method, $this->action);
            // Add each field inside the form tags.
            foreach($this->fields as $field){
                $html .= $field;
            }

            // Add a submit button.
            $html .= sprintf('<button type="submit">Submit</button>');
            // Close form.
            $html .=sprintf('</form>');
            echo $html;
        }
    }
?>
