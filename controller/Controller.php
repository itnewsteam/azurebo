<?php include_once("model/Model.php");


class Controller {
     public $model;

     public function __construct()
     {
          $this->model = new Mod();
     }

     public function invoke()
     {   if (!isset($_GET['book']))
          {
               $books = $this->model->getList();
               include 'view/list.php';
          }
     }

 }
?>