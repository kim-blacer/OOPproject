<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numCountries = $_POST['numCountries'];
    
    if (is_numeric($numCountries) && $numCountries > 0) {
        echo "<form method='post'>";
        for ($i = 1; $i <= $numCountries; $i++) {
            echo "Country $i: <input type='text' name='country$i'><br>";
        }
        echo "<input type='hidden' name='numCountries' value='$numCountries'>";
        echo "<input type='submit' name='submitCountries' value='Submit Countries'>";
        echo "</form>";
    } else {
        echo "Please enter a valid number.";
    }
} elseif (isset($_POST['submitCountries'])) {
    $numCountries = $_POST['numCountries'];
    
    echo "You have been to the following countries:<br>";
    for ($i = 1; $i <= $numCountries; $i++) {
        $country = $_POST["country$i"];
        echo "Country $i: $country<br>";
    }
} else {
    echo "<form method='post'>";
    echo "How many countries have you been to? <input type='text' name='numCountries'><br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
}
?>