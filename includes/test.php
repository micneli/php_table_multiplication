<?php
$title = "Tester la multiplication";
include "header.php";
include "footer.php";
?>

<h1>Selectionez la table de multiplication</h1>
<form class="form-show" action="" method="GET">
    <label for="testField"></label>
    <select name="id" id="testField">
        <option value="1">la table de 1</option>
        <option value="2">la table de 2</option>
        <option value="3">la table de 3</option>
        <option value="4">la table de 4</option>
        <option value="5">la table de 5</option>
        <option value="6">la table de 6</option>
        <option value="7">la table de 7</option>
        <option value="8">la table de 8</option>
        <option value="9">la table de 9</option>
        <option value="10">la table de 10</option>
    </select>
    <input type="submit" name="submit">
</form>

<?php

if(isset($_GET["submit"])) {
    $id_str = $_GET["id"];
    $id = intval($id_str);
    $rand = rand(1, 10);

    for($i = 1; $i <= 10; $i++) {
        if($id === $i) {
?>
    <h2>Vous avez selectionné la table du numero <?php echo $id; ?></h2>
    <form id="test-form" class="form-inline" action="" method="POST">
        <!-- <div class="form-group"></div> -->
        <input type="number" value="<?php echo $id; ?>">
        <div> x </div>
        <input type="number" name="secondNum" value="<?php echo $rand; ?>">
        <div> = </div>
        <input type="number" name="result" placeholder="Entrer le resultat">
        <input type="submit" name="submitResult" value="Verifier">
    </form>

<?php
    if(isset($_POST["submitResult"])) {
        $result_str = $_POST["result"];
        $result = intval($result_str);

        $secondNum_str = $_POST["secondNum"];
        $secondNum = intval($secondNum_str);

        if($result == "") {
            echo '<p class="text-center">Vous devez entrer une valeur comme le resultat!</p>';
        } else {
            if($result === $i * $secondNum) {
                echo '<p class="text-center">Le resultat est correct!</p>';
            } else {
                echo '<p class="text-center">Incorrect! Essayez de nouveau.</p>';
            }
        }
    }
        }
    }
}
?>