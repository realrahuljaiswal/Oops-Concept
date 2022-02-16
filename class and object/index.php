<?php
 class Mobile{

    public $model;      //properties
    function showModel($number){
        $this->model=$number;
        echo "Model Number is $this->model <br>";
    }
 }

 $Samsung = new Mobile;
 $Samsung->showModel('J7');
 $Samsung->showModel('J7+');

 $LG = new Mobile;
 $LG->showModel('G5');
 $LG->showModel('G8');

// $Samsung = new Mobile;
$Samsung->showModel('J7');


?>