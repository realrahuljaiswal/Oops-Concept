<?php
class Mobile{
    public $model;
    function showModel(){
        echo $this->model;
    }
}

$nokia = new Mobile;
$nokia->model="Nokia 3310";
$nokia->showModel();

?>