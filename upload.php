<?php

// Moves uploaded file to a books directory
$targetPath = "books/" . basename($_FILES["inpFile"]["name"]);
move_uploaded_file($_FILES["inpFile"]["tmp_name"]. $targetPath);
