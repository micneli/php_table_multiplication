<?php
$title = "Choisir les tables de multiplications";
include "includes/header.php";
include "includes/footer.php";
?>

<div class="container">
  <h1>Selectionez les tables de multiplication</h1>

  <!-- <form id="test-form" class="form-inline" action="" method="GET"> -->
  <?php
  // for ($i = 1; $i <= 10; $i++) {
  // echo '<div class="form-check form-check-inline">
  // <input class="form-check-input" type="checkbox" name="num[]" value="' . $i . '">' . $i . '</div>';
  // }
  // 
  ?>
  <!-- <div class="form-check form-check-inline">
<input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher">
</div>
</form> -->

  <form id="test-form" class="form-inline" action="" method="GET">
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="' . $i . 'fois" value="' . $i . '">' . $i .
        '</div>';
    }
    ?>
    <div class="form-check form-check-inline">
      <input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher">
    </div>
  </form>

  <?php
  if (isset($_GET["submit"])) {
    $arr = [];

    for ($i = 0; $i < 10; $i++) {
      $arr[$i] = (isset($_GET[($i + 1) . 'fois']));
    }

    if (array_sum($arr) === 0) { // boolean values are casted as 1 for true and 0 for false
      echo "<h2>Vous devez cocher au moins une case</h2>";
    } else {
      echo "<h2>Vous avez selectionné les tables suivantes:</h2>";
      echo "Number of the checked boxes: " . array_sum($arr) . '<br>';
    }
  ?>

    <div class="tables">
      <?php
      foreach ($arr as $key => $value) {
        if ($value) {
      ?>
          <div class="table">
            <?php
            for ($k = 1; $k <= 10; $k++) {
              echo $key + 1 . ' * ' . $k . ' = ' . ($key + 1) * $k . '<br>';
            }
            ?>
          </div>
      <?php
        }
      }
      ?>
    </div>

  <?php
  }
  ?>
</div>