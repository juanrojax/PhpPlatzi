<?php
namespace App\Models;
require_once('BaseElements.php');

use Illuminate\Database\Eloquent\Model;

class Job extends Model{

    protected $table = 'jobs';
    
    /* public function __construct($title, $description){
        $newtitle = "Job $title";
       parent::__construct($newtitle, $description);
    } */

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job Duration : $years years $extraMonths months";
    }

    /* public function getDescription(){
        return $this->description;
    } */

}