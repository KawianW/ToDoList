<?php

/* Hier pakt de code alle data uit de table 'lijsten' */
$query = $dbconn->prepare("SELECT * FROM Lists");
$query->execute();
/* Het resultaat wordt uit de database gefetchd */
$result = $query->fetchAll();