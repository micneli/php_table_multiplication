<?php
$title = "Tester les multiplications";
include "includes/header.php";
include "includes/footer.php";
?>

<h1>Selectionez la table de multiplication</h1>
<form class="form-show" action="" method="GET">
    <label for="testField"></label>
    <select name="id" id="testField">
        <?php
        if(isset($_GET["submit"])) {
            $id_str = $_GET["id"];
            $id = intval($id_str);
            echo '<option value="" selected>la table de ' . $id . '</option>';
        }
        for($i = 1; $i <=10; $i++) {
            echo '<option value="' . $i . '">la table de ' . $i . '</option>';
        } 
        ?>
    </select>
    <input type="submit" name="submit" value="Tester" class="btn btn-info">
</form>

<?php
if(isset($_GET["submit"])) {
    $id_str = $_GET["id"];
    $id = intval($id_str);
    
    $rand = rand(1, 10);
?>
    <h2>Vous avez selectionné la table du numero <?php echo $id; ?></h2>
    <form id="test-form" class="form-inline" action="" method="POST">
        <!-- <div class="form-group"></div> -->
        <input type="number" value="<?php echo $id; ?>">
        <div> x </div>
        <input type="number" name="secondNum" value="<?php echo $rand; ?>">
        <div> = </div>
        <input type="number" name="result" placeholder="Entrer le resultat">
        <input type="submit" name="submitResult" value="Verifier" class="btn btn-info">
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
            if($result === $id * $secondNum) {
                echo '<p class="text-center">Le resultat est correct !</p>';
            } else {
                echo '<p class="text-center">Incorrect ! Essayez de nouveau.</p>';
            }
        }
    }
}
?>