<?php
 class Mobile{

    var $model;      //properties
    function showModel(){
        
        echo "Model Number is : $this->model <br>";
    } 
 }

 $samsung = new Mobile;
 $samsung->model='A8+';
 $samsung->showModel();

 
 $lg = new Mobile;
 $lg->model='G5';
 $lg->showModel();
?>