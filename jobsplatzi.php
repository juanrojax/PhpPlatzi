<?php
//error_reporting(0);
$name = 'Juan';
$limitMonths = 2000;
$jobs = [
  [
    'title' => 'PHP Developer',
    'description' => 'This is an awesome job!!!',
    'visible' => true,
    'months' => 16
  ],
  [
    'title' => 'Python Dev',
    'visible' => false,
    'months' => 14
  ],
  [
    'title' => 'Devops',
    'visible' => true,
    'months' => 5
  ],
  [
    'title' => 'Node Dev',
    'visible' => true,
    'months' => 24
  ],
  [
    'title' => 'Frontend Dev',
    'visible' => true,
    'months' => 3
  ]
];

function getDuration($months) {
  $years = floor($months / 12);
  $extraMonths = $months % 12;

  if ($years < 1) {
    return "$extraMonths months";
  }else if ($extraMonths < 1) {
    return "$years years";
  }else{
    return "$years years $extraMonths months";
  }

}

function printJob($job) {
  if($job['visible'] == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job['title'] . '</h5>';
  if (isset($job['description'])) {
    echo '<p>' . $job['description'] . '</p>';
  }
  echo '<p>' . getDuration($job['months']) . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

?>