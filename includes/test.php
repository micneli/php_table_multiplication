<?php
$title = "Tester la multiplication";
include "header.php";
include "footer.php";
?>

<h1>Selectionez la table de multiplication</h1>
<form class="form-show" action="" method="GET">
    <label for="test"></label>
    <select name="id" id="test">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
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
    <form class="test" action="" method="POST">
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

        if($result === $i * $secondNum) {
            echo "Le resultat est correct!";
        } else {
            echo "Incorrect! Essayez de nouveau.";
        }
    }
        }
    }
}
?>