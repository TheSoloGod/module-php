<?php
    class Node{
        public $data;
        public $next;

        public function __construct($data)
        {
            $this->data = $data;
            $this->next = NULL;
        }

        public function readNote(){
            return $this->data;
        }
    }

?>