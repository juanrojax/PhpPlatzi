<?php
$imagenproject = '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
//definido en psr4 del composer.json para enlazar


use App\Models\{Job,Projects,Printable};

/* $job1 = new Job('PHP Developer', 'This is an awesome job!!!');
$job1->months = 16;

$job2 = new Job('Python Developer', 'This is an awesome job!!!');
$job2->months = 24;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;
*/

//$project1 = new Projects('Project1', 'Descripcion proyecto 1'); 

$jobs = Job::all();

$projects = Projects::all();

/* $jobs = [
    $job1,
    $job2,
    $job3
  ]; */

// $projects = [
//     $project1
// ];
  
  function printJob($job) {
    // if($job->visible == false) {
    //   return;
    // }

  
    echo '<li class="work-position">';
    echo '<h5>' . $job->title . '</h5>';
    //echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
    echo '<p>' . $job->description . '</p>';
    //echo '<p>' . $job->getDurationAsString() . '</p>';
    //echo $job->imagen;
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }