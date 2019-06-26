<?php
namespace App\Models;
require_once('BaseElements.php');

class Projects extends BaseElements{

    public $imagen;

    public function __construct($title, $description,$imagen){
        $tituloproject = "Projecto $title";
        $this->imagen = $imagen;
        parent::__construct($tituloproject, $description);
    }




}