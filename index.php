<?php

  $datiTabella = [
    'Auto_id' => 'BIGINT – PRIMARY_KEY – AUTO_INCREMENT',
    'Marca' => 'VARCHAR(50) – NOT_NULL',
    'Modello' => 'VARCHAR(50) – NOT_NULL',
    'Versione' => 'VARCHAR(150)',
    'Prezzo' => 'FLOAT(7,2) – NOT_NULL',
    'Località' => 'VARCHAR(100)',
    'Chilometraggio' => 'MEDIUMINT – UNSIGNED – NOT_NULL',
    'Carburante' => 'VARCHAR(20) – NOT_NULL',
    'Classe_emissioni' => 'TINYINT – NOT_NULL – DEFAULT(0)',
    'Numero_porte' => 'TINYINT – NOT_NULL',
    'Numero_posti' => 'TINYINT – NOT_NULL',
    'Data_immatricolazione' => 'DATE – NOT_NULL',
    'Peso' => 'SMALLINT – UNSIGNED',
    'Lunghezza' => 'SMALLINT – UNSIGNED',
    'Larghezza' => 'SMALLINT – UNSIGNED',
    'Altezza' => 'SMALLINT – UNSIGNED',
    'Passo' => 'SMALLINT – UNSIGNED',
    'Potenza' => 'SMALLINT – UNSIGNED',
    'Descrizione' => 'TEXT – NOT_NULL',
    'Optional' => 'TEXT',
    'Targa' => 'CHAR(7)',
    'Data_inserimento' => 'TIMESTAMP',
    'Data_aggiornamento' => 'TIMESTAMP'
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>

  <h1>Tabella dati auto usata</h1>
  <h3>Nome tabella = <i>auto_usate</i></h3>
  
  <table>
    <?php foreach($datiTabella as $chiave => $dato){ ?>
      <tr>
        <td> <?php echo $chiave ?> </td>
        <td> <strong> <?php echo $dato ?> </strong> </td>
      </tr>
    <?php } ?>
  </table>

</body>
</html>