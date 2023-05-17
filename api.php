<?php
    class olla{
        public $lugares;
        private $merca;
        public function __construct(){

        }
        public function __destruct(){
            echo "se retiro la ".__CLASS__;
        }
    }
    $obj = new olla();
?>  