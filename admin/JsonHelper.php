<?php

    class JSONHelper {

        public static $path;

        //Create
        public static function create($path){
            $content = file_get_contents($path);
            $content = json_decode($content, true);
            $content[] = $_POST;
            $content = json_encode($content, JSON_PRETTY_PRINT);
            file_put_contents($path, $content);
        }
        //Read (index/detail)
        public static function read($path){
            $f = fopen($path, 'r');
            $content = fread($f, filesize($path));
            $json_array = json_decode($content, true);
            fclose($f);
            return $json_array;
        }
        //Update (edit)
        public static function edit($path){
            $content = file_get_contents($path);
            $content = json_decode($content, true);
            $item = $content[$_GET['index']];
            if(count($_POST)>0){
                $item = $_POST;
                $content[$_GET['index']] = $item;
                $content = json_encode($content, JSON_PRETTY_PRINT);
                file_put_contents($path, $content);
                echo 'Changes Saved';
            }else
                die();
        }
        //Delete
        public static function delete($path){
            $content = file_get_contents($path);
            $content = json_decode($content, true);
            unset($content[$_GET['index']]);
            $content = array_values($content);
            $content = json_encode($content, JSON_PRETTY_PRINT);
            file_put_contents($path, $content);
        }

    }

?>