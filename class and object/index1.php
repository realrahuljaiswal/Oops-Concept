<?php
 class Mobile{

    var $model;      //properties
    function showModel($number){
        // global $model;
        // $model = $number;
        // echo "Model Number is : $model <br>";

        // or

        $this->model=$number;
        // $model = $number;
        echo "Model Number is : $this->model <br>";
    } 
 }

 $samsung = new Mobile;
 $samsung->showModel('A8');

 $lg = new Mobile;
 $lg->showModel('G5');

?>