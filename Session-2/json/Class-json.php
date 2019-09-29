<?php
    Class Json{
        public $myJson;
        public $arrayData;
        public $jsonData;
        public function __construct($myJson)
        {
            $this->myJson = $myJson;
        }
        public function getContent(){
            $this->jsonData = file_get_contents($this->myJson);
        }
        public function jsonDecode(){
            $this->arrayData = json_decode($this->jsonData, true);
        }
        public function jsonEncode(){
            $this->jsonData = json_encode($this->arrayData, JSON_PRETTY_PRINT);
        }
        public function pushContent(){
            return file_put_contents($this->myJson, $this->jsonData);
        }
        public function addElement($element){
            array_push($this->arrayData, $element);
        }
        public function removeElement($index){
            array_splice($this->arrayData, $index, 1);
        }
        public function getArrayData(){
            $this->jsonData = file_get_contents($this->myJson);
            return $this->arrayData = json_decode($this->jsonData, true);
        }
    }
?>