<?php
$title = "Choisir les tables de multiplications";
include "includes/header.php";
include "includes/footer.php";
?>

<div class="container">
    <h1>Selectionez les tables de multiplication</h1>

    <form id="test-form" class="form-inline" action="" method="GET">
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo '<div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="num[]" value="' . $i . '">' . $i . 
                '</div>';
        }
        ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher">
        </div>
    </form>

<?php
if(isset($_GET["submit"])) {
    if(!isset($_GET['num'])) { // if none of the checkboxes has been checked
        echo "<h2>Vous devez cocher au moin une case!</h2>";        
    } else {
        $arr = $_GET['num']; // array with the values coming from the checkboxes BEING CHECKED
    ?>
    <div class="tables">
        <?php
        foreach ($arr as $value) {
        ?>
            <div class="table">
                <?php
                    for($i = 1; $i <= 10; $i++) {
                        echo $value . ' * ' . $i . ' = ' . ($value)*$i . '<br>';
                ?>
                    <?php
                    } 
                    ?>
            </div>
        <?php
        }
        ?>
    </div>
<?php 
}  
}
?>
</div>

