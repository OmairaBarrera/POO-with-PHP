<?php
    /* class olla{
        public $lugares;
        private $merca;
        public function __construct(){

        }
        public function set_lugar(string $p1):string {
            $this->lugares = $p1;
        }
        public function get_lugar():string {
            return $this->lugares;
        } 
        public function __destruct(){
            echo "se retiro la ".__CLASS__;
        }
    }
    $obj = new olla();
    $obj->get_lugar(); */

    /* function data(){
        var_dump(func_get_arg(2));
    } */

    function data(){
        $list = func_get_args();
        $arg = array_combine(["nombre","edad","trabajo"],$list);
        var_dump(json_decode(json_encode($arg))->edad);
    }

    data("migle",23,true);
?>  