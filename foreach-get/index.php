<?php
var_dump($_GET);

foreach($_GET as $key => $value) {
    echo "<p>$key: $value</p>";
}

// $user_word = $_GET["word"];
// var_dump($user_word);
if (empty($_GET["word"])) {
    echo "Parola mancante";
} else {
    echo "ok";
}
?>