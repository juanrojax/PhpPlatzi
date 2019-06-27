<?php
namespace App\Models;
require_once('BaseElements.php');

use Illuminate\Database\Eloquent\Model;

class Projects extends Model{

    protected $table = 'projects';

    public $imagen;

    public function __construct(/*$title, $description*/){
        // $tituloproject = "Projecto $title";
        // $this->imagen = $imagen;
        // parent::__construct($tituloproject, $description);
    }




}