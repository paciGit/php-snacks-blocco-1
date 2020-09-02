<h3> Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema. </h3>


<?php
    $matches = [
      [
        'home' => 'Los Angeles Lakers',
        'away' => 'Miami Heat',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Orlando Magic',
        'away' => 'San Antonio Spurs',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Los Angeles Clippers',
        'away' => 'Toronto Raptors',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Houston Rockets',
        'away' => 'Chicago Bulls',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ]
    ];
  ?>

<!-- Classifico le partite con i risultati in modo casuale -->
  <?php for($i=0; $i < count($matches); $i++){ ?>
      <li>
          <?php echo $matches[$i]['home']?> &ndash;
              <?php echo $matches[$i]['away']?> |
                  <?php echo $matches[$i]['point_Home']?> &ndash;
                      <?php echo $matches[$i]['point_Away']?>
      </li>
  <?php } ?>

  <h3> Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" </h3>

  <?php

  $nome = $_GET['name'];
  $name = strlen($nome);
  // email
  $mail = $_GET['mail'];
  $chiocciola = strpos($mail, '@');
  $punto = strpos($mail, '.');
  if ($chiocciola !== false && $punto !== false) {
    $email = 'correct'; //email corretta
  } else {
    $email = 'wrong'; //email sbagliata
  }
  // verificà età
  $età =$_GET['age'];
  $age = intval($età);

  //condizioni di verifica per accedere
  if ($name > 3 && $email == 'correct' && $age > 1) {
    echo 'Accesso riuscito';
  } else {
    echo 'Accesso negato';
  }

  ?>



<h3> Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta </h3>

<?php
  $numeri = arrayCasual(1, 100, 15);
  print_r($numeri);

  //funzione che crea un array di numeri:
  function arrayCasual($min, $max, $lengthArr) { //funzione per dare i valori all'array
    $array = [];
    while (count($array) < $lengthArr) { //ciclo while che si ferma alla lunghezza data prima (15)
      $number = rand($min, $max);
      if (!in_array($number, $array)) { //se incontra un numero diverso da quello già inserito
        $array[] = $number; //viene inserito nell'array
      }
    }
    return $array; //array completo(15)
  }
?>
