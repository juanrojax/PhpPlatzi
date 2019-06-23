<?php 

// Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:
echo "<strong>Ejercicio 2</strong>";

$geo = [
	'Colombia' =>[
		'Medellin', 'Bogota', 'Cartagena'
	],
	'Mexico' =>[
		'Ciudad', 'Monterrey', 'Acapulco' 
	]
]; 


foreach ($geo as $pais => $ciudades) {
	echo "<br>El pais <strong>$pais</strong> Tiene ciudades: ";
	foreach ($ciudades as $value) {
		echo '<li>'.$value.'</li>';
	}
}


// Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:

// $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61]

echo "<br><strong>Ejercicio 3</strong> <br>";

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

echo "Todos los valores ".var_dump($valores);
rsort($valores);
echo "<br>";
echo "Los mas altos: ";
for ($i=0; $i < 3 ; $i++) { 
	echo $valores[$i].', ';
};

echo "<br>";
sort($valores);
echo "Los mas bajos: ";
for ($i=0; $i <3 ; $i++) { 
	echo $valores[$i].", ";
}
//Array multidimencional
echo "<br><br>";
$jobs = [
  [
    'title' => 'PHP Developer', 
    'description' => 'Esto es una descripción del trabajo realizado',
    'Achievements' => ['Logro 1','Logro 2','Logro 3','Logro 4'] 
  ],
  [
    'title' => 'Python Dev', 
    'description' => 'Esto es una descripción del trabajo realizado', 
    'Achievements' => ['Logro 1','Logro 2','Logro 3'] 
  ],
  [
    'title' => 'DevOps', 
    'description' => 'Esto es una descripción del trabajo realizado',
    'Achievements' => ['Logro 1','Logro 2','Logro 3','Logro 4','Logro 5']  
  ],
  [
    'title' => 'Java Dev', 
    'description' => 'Esto es una descripción del trabajo realizado',
    'Achievements' => ['Logro 1','Logro 2']  
  ],
  [
    'title' => '.NET Dev', 
    'description' => 'Esto es una descripción del trabajo realizado',
    'Achievements' => ['Logro 1','Logro 2','Logro 3','Logro 4','Logro 5','Logro 6']  
  ]
];

foreach ($jobs as $key => $value) {

    echo '<li class="work-position">';  
    echo '<h5>' . $value['title'] . '</h5>';  
    echo '<p>' . $value['description'] . '</p>'; 
  

    echo '<strong>Achievements:</strong>';
    echo '<ul>';

      foreach ($jobs[$key]['Achievements'] as $key2 => $value2) {
        echo "<li>$value2</li>"; 
      }

    echo '</ul>';
    echo '</li>';

  }


 //OPERADORES
 echo "<h2>Ejececicio 1 </h2>";
 $valores1 = 34 + 3;
 $valores2 = 3 * (2+3);

 echo "Resultados: ".$valores1." y ".$valores2 ;


echo "<h2>Ejercicio 2 </h2>";

$valor = 6;
if ($valor > 5 && $valor < 10) {
	echo "$valor es mayor que 5 pero menor que 10";
}else if ($valor > 10) {
	echo "$valor es mayor que 5 pero mayore que 10";
}else if ($valor < 5) {
	echo "$valor es menor que 5 pero tiene que ser mayor";
}

?>