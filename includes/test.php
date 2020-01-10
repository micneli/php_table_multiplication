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
    
    if($id === 2) {
        ?>

    <form class="test" action="" method="">
        <input type="number" value="<?php echo $id; ?>">
        <div>x</div>
        <input type="number" value="<?php echo rand(1, 10); ?>">
        <div>=</div>
        <input type="number" name="number" placeholder="Entrer le resultat">
        <input type="submit" name="result" value="Verifier">
    </form>

    <?php
    
    }
}