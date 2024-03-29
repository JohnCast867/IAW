
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include 'funciones.php';
    generarHTML();
    include "DBACCES.php";

$json_data = '[
    {
      "Nom": "The Legend of Zelda: Breath of the Wild",
      "Desenvolupador": "Nintendo",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2017-03-03"
    },
    {
      "Nom": "The Witcher 3: Wild Hunt",
      "Desenvolupador": "CD Projekt Red",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2015-05-19"
    },
    {
      "Nom": "Red Dead Redemption 2",
      "Desenvolupador": "Rockstar Games",
      "Plataforma": "PlayStation 4, Xbox One, PC",
      "Llançament": "2018-10-26"
    },
    {
      "Nom": "Super Mario Odyssey",
      "Desenvolupador": "Nintendo",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2017-10-27"
    },
    {
      "Nom": "Cyberpunk 2077",
      "Desenvolupador": "CD Projekt Red",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2020-12-10"
    },
    {
      "Nom": "God of War",
      "Desenvolupador": "Santa Monica Studio",
      "Plataforma": "PlayStation 4, PlayStation 5",
      "Llançament": "2018-04-20"
    },
    {
      "Nom": "Horizon Zero Dawn",
      "Desenvolupador": "Guerrilla Games",
      "Plataforma": "PlayStation 4, PC",
      "Llançament": "2017-02-28"
    },
    {
      "Nom": "The Elder Scrolls V: Skyrim",
      "Desenvolupador": "Bethesda Game Studios",
      "Plataforma": "PC, PlayStation 3, Xbox 360",
      "Llançament": "2011-11-11"
    },
    {
      "Nom": "Final Fantasy VII Remake",
      "Desenvolupador": "Square Enix",
      "Plataforma": "PlayStation 4",
      "Llançament": "2020-04-10"
    },
    {
      "Nom": "Minecraft",
      "Desenvolupador": "Mojang",
      "Plataforma": "PC, PlayStation, Xbox, Switch, etc.",
      "Llançament": "2011-11-18"
    },
    {
      "Nom": "The Last of Us Part II",
      "Desenvolupador": "Naughty Dog",
      "Plataforma": "PlayStation 4, PlayStation 5",
      "Llançament": "2020-06-19"
    },
    {
      "Nom": "Genshin Impact",
      "Desenvolupador": "miHoYo",
      "Plataforma": "PC, PlayStation, Switch, iOS, Android",
      "Llançament": "2020-09-28"
    },
    {
      "Nom": "Assassins Creed Valhalla",
      "Desenvolupador": "Ubisoft",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2020-11-10"
    },
    {
      "Nom": "Pokémon FireRed / LeafGreen",
      "Desenvolupador": "Game Freak",
      "Plataforma": "Game Boy Advance",
      "Llançament": "2004-01-29"
    },
    {
      "Nom": "Animal Crossing: New Horizons",
      "Desenvolupador": "Nintendo",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2020-03-20"
    },
    {
      "Nom": "Demons Souls",
      "Desenvolupador": "Bluepoint Games / SIE Japan Studio",
      "Plataforma": "PlayStation 5",
      "Llançament": "2020-11-12"
    },
    {
      "Nom": "Call of Duty: Modern Warfare (2019)",
      "Desenvolupador": "Infinity Ward",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2019-10-25"
    },
    {
      "Nom": "Marvels Spider-Man: Miles Morales",
      "Desenvolupador": "Insomniac Games",
      "Plataforma": "PlayStation 4, PlayStation 5",
      "Llançament": "2020-11-12"
    },
    {
      "Nom": "Hades",
      "Desenvolupador": "Supergiant Games",
      "Plataforma": "PC, Switch",
      "Llançament": "2020-09-17"
    },
    {
      "Nom": "Death Stranding",
      "Desenvolupador": "Kojima Productions",
      "Plataforma": "PlayStation 4, PC",
      "Llançament": "2019-11-08"
    },
    {
      "Nom": "Stardew Valley",
      "Desenvolupador": "ConcernedApe",
      "Plataforma": "PC, PlayStation, Xbox, Switch, iOS, Android",
      "Llançament": "2016-02-26"
    },
    {
      "Nom": "Ghost of Tsushima",
      "Desenvolupador": "Sucker Punch Productions",
      "Plataforma": "PlayStation 4",
      "Llançament": "2020-07-17"
    },
    {
      "Nom": "Resident Evil Village",
      "Desenvolupador": "Capcom",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-05-07"
    },
    {
      "Nom": "Sekiro: Shadows Die Twice",
      "Desenvolupador": "FromSoftware",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2019-03-22"
    },
    {
      "Nom": "DOOM Eternal",
      "Desenvolupador": "id Software",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2020-03-20"
    },
    {
      "Nom": "Ratchet & Clank: Rift Apart",
      "Desenvolupador": "Insomniac Games",
      "Plataforma": "PlayStation 5",
      "Llançament": "2021-06-11"
    },
    {
      "Nom": "It Takes Two",
      "Desenvolupador": "Hazelight Studios",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-03-26"
    },
    {
      "Nom": "Pokémon Diamond/Pearl",
      "Desenvolupador": "Game Freak",
      "Plataforma": "Nintendo DS",
      "Llançament": "2006-09-28"
    },
    {
      "Nom": "Hitman 3",
      "Desenvolupador": "IO Interactive",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-01-20"
    },
    {
      "Nom": "Persona 5 Royal",
      "Desenvolupador": "Atlus",
      "Plataforma": "PlayStation 4",
      "Llançament": "2020-03-31"
    },
    {
      "Nom": "Metroid Dread",
      "Desenvolupador": "Nintendo",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2021-10-08"
    },
    {
      "Nom": "Monster Hunter Rise",
      "Desenvolupador": "Capcom",
      "Plataforma": "Nintendo Switch, PC",
      "Llançament": "2021-03-26"
    },
    {
      "Nom": "Little Nightmares II",
      "Desenvolupador": "Tarsier Studios",
      "Plataforma": "PC, PlayStation, Xbox, Switch",
      "Llançament": "2021-02-11"
    },
    {
      "Nom": "Outriders",
      "Desenvolupador": "People Can Fly",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-04-01"
    },
    {
      "Nom": "Kena: Bridge of Spirits",
      "Desenvolupador": "Ember Lab",
      "Plataforma": "PC, PlayStation 4, PlayStation 5",
      "Llançament": "2021-09-21"
    },
    {
      "Nom": "Mass Effect Legendary Edition",
      "Desenvolupador": "BioWare",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2021-05-14"
    },
    {
      "Nom": "Chicory: A Colorful Tale",
      "Desenvolupador": "Greg Lobanov",
      "Plataforma": "PC, PlayStation, Switch",
      "Llançament": "2021-06-10"
    },
    {
      "Nom": "Scarlet Nexus",
      "Desenvolupador": "Bandai Namco Entertainment",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-06-25"
    },
    {
      "Nom": "New Pokémon Snap",
      "Desenvolupador": "Bandai Namco Studios",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2021-04-30"
    },
    {
      "Nom": "Back 4 Blood",
      "Desenvolupador": "Turtle Rock Studios",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-10-12"
    },
    {
      "Nom": "NieR Replicant ver.1.22474487139...",
      "Desenvolupador": "Toylogic",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2021-04-23"
    },
    {
      "Nom": "Pokémon Black/White",
      "Desenvolupador": "Game Freak",
      "Plataforma": "Nintendo DS",
      "Llançament": "2010-03-04"
    },
    {
      "Nom": "Riders Republic",
      "Desenvolupador": "Ubisoft Annecy",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-10-28"
    },
    {
      "Nom": "The Medium",
      "Desenvolupador": "Bloober Team",
      "Plataforma": "PC, Xbox Series X/S",
      "Llançament": "2021-01-28"
    },
    {
      "Nom": "Resident Evil 3 Remake",
      "Desenvolupador": "Capcom",
      "Plataforma": "PC, PlayStation 4, Xbox One",
      "Llançament": "2020-04-03"
    },
    {
      "Nom": "Bravely Default II",
      "Desenvolupador": "Silicon Studio / Claytechworks",
      "Plataforma": "Nintendo Switch",
      "Llançament": "2021-02-26"
    },
    {
      "Nom": "Age of Empires IV",
      "Desenvolupador": "Relic Entertainment",
      "Plataforma": "PC",
      "Llançament": "2021-10-28"
    },
    {
      "Nom": "Halo Infinite",
      "Desenvolupador": "343 Industries",
      "Plataforma": "PC, Xbox Series X/S",
      "Llançament": "2021-12-08"
    },
    {
      "Nom": "Far Cry 6",
      "Desenvolupador": "Ubisoft",
      "Plataforma": "PC, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X/S",
      "Llançament": "2021-10-07"
    },
    {
      "Nom": "Deathloop",
      "Desenvolupador": "Arkane Studios",
      "Plataforma": "PC, PlayStation 5",
      "Llançament": "2021-09-14"
    },
    {
      "Nom": "Deathloop",
      "Desenvolupador": "Arkane Studios",
      "Plataforma": "PC, PlayStation 5",
      "Llançament": "2021-09-14"
    }
  ]';

  $data = json_decode($json_data, true);

  $desenvolupadors_array = array();
  
  foreach ($data as $game) {
      $desenvolupadors_array[] = $game['Desenvolupador'];
  }
  
  $desenvolupadors_array = array_unique($desenvolupadors_array);
  
  foreach ($desenvolupadors_array as $desenvolupador) {
      $sql = "INSERT INTO DESENVOLUPADOR (nom) VALUES ('$desenvolupador')";
  
      if ($conn->query($sql)) {
          echo "Desenvolupador insertado correctamente: $desenvolupador <br>";
      } else {
          echo "Error al insertar desarrollador: " . $conn->error . "<br>";
      }
  }
  
  foreach ($data as $game) {
      $nom = $game['Nom'];
      $desenvolupador = $game['Desenvolupador'];
      $plataforma = $game['Plataforma'];
      $llançament = $game['Llançament'];
  
      $sql = "INSERT INTO VIDEOJOC (nom, data_llançament, DESENVOLUPADOR_id) 
              VALUES ('$nom', '$llançament', (SELECT id FROM DESENVOLUPADOR WHERE nom='$desenvolupador'));
              ";
  
      if ($conn->query($sql)) {
          echo "Juego insertado correctamente: $nom <br>";
      } else {
          echo "Error al insertar registro: " . $conn->error . "<br>";
      }
  }
  
  $plataformas_array = array();
  
  foreach ($data as $game) {
      $plataformas = explode(", ", $game['Plataforma']);
      foreach ($plataformas as $plataforma) {
          $plataformas_array[] = $plataforma;
      }
  }
  
  $plataformas_array = array_unique($plataformas_array);
  
  foreach ($plataformas_array as $plataforma) {
      $sql = "INSERT INTO PLATAFORMA (nom) VALUES ('$plataforma')";
  
      if ($conn->query($sql)) {
          echo "Plataforma insertada correctamente: $plataforma <br>";
      } else {
          echo "Error al insertar plataforma: " . $conn->error . "<br>";
      }
  }
  
  $conn->null;
  
?>

</body>
</html>



