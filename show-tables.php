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
                    <input class="form-check-input" type="checkbox" name="num[]" value="' . $i . '">' . $i . '</div>';
        }
        ?>
        <div class="form-check form-check-inline">
            <input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher">
        </div>
    </form>

<div id="serverResponse"></div>

<script type="text/javascript">
    let formElement = document.querySelector("form");
    const hr = new XMLHttpRequest();

    hr.onload = function() {
        const serverResponse = document.getElementById("serverResponse");
        serverResponse.innerHTML = hr.responseText;
    };

    hr.open("GET", "submitForm.php");
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    hr.send(new FormData(formElement));
</script>

</div>

