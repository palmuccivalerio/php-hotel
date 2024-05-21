<?php
// array di hotel
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// stampa tutta di array semplice con stesso metodo spiegato sotto per la pagina solo che non incastrato in tabella
foreach ($hotels as $hotel) {
    echo "<div>Nome:                {$hotel['name']}    </div>";
    echo "<div>Descrizione:         {$hotel['description']} </div>";
    echo "<div>Parcheggio:          {$hotel['parking']}      </div>";
    echo "<div>Voto:                {$hotel['vote']}    </div>";
    echo "<div>Distanza dal centro: {$hotel['distance_to_center']}  </div>";
    echo "<hr>";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap per creare le tabelle  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    

    <table class="table">

        <tbody>
            <!-- Metodo per stampare con for each un determinato valore infatti hotel e il nome che abbiamo scelto in cui diamo il nome hotel alla lista di elementi e poi prendiamo quello selezionato -->
            <tr>
                <th scope="row">Nome</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td> <?php echo $hotel['name'] ?></td>;
                <?php  }  ?>
             </tr>
            <tr>
            <th scope="row">Descrizione</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td> <?php echo $hotel['description'] ?></td>;
                <?php  }  ?>
            </tr>
            <tr>
            <th scope="row">Parcheggio</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td> <?php echo $hotel['parking'] ?></td>;
                <?php  }  ?>
            </tr>
            <tr>
            <th scope="row">Voto</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td> <?php echo $hotel['vote'] ?></td>;
                <?php  }  ?>
            </tr>
            <tr>
            <th scope="row">distanza dal centro</th>
                <?php foreach ($hotels as $hotel) { ?>
                    <td> <?php echo $hotel['distance_to_center'] ?> m</td>;
                <?php  }  ?>
            </tr>
           
           

        </tbody>
    </table>





    <div>

<?php if (empty($_GET)) { ?>
  <h2>Inserisci dati nel form</h2>
  <form action="index.php" method="GET">
    <div>
      <label for="parola">parcheggio</label>
      <input type="text" name="parola" id="parola">
    </div>
    
    <div>
      <label for="voto">Voto</label>
      <input type="number" name="voto" id="voto">
    </div>



    <div>
      <button type="submit">Invia</button>
      <button type="reset">Annulla</button>
    </div>
  </form>
<?php } else { ?>
  <h2>Ecco sono i tuoi dati</h2>
  <ul>
    <?php foreach ($_GET as $key => $value) { ?>
      <li><?php echo "{$key}: {$value}"; ?></li>
    <?php } ?>
  </ul>
<?php } ?>

</div>







</body>

</html>