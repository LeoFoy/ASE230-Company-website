<?php
    require_once("../JsonHelper.php");
    class Pages {

        public $path = "../../data/pages.json";

        //use jsonhelper
        public function create(){
            //call json helper
            JSONHelper::create($this->path);
        }
        public function read(){
            $array = JSONHelper::read($this->path);
            return $array;
        }
        public function edit(){
            JSONHelper::edit($this->path);
        }
        public function delete(){
            JSONHelper::delete($this->path);
        }
    }

?>

