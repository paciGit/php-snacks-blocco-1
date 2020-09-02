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
