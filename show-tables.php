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
                <input class="form-check-input" type="checkbox" name="' . $i . 'fois" value="">' . $i . 
              '</div>';
    }
    ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher">
    </div>
</form>
<script type="text/javascript">
        const request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            console.log("test");
            if(this.status === 200) {
                const serverResponse = document.getElementById("serverResponse");
                const table = document.getElementById("table");
                //let data = JSON.parse(this.responseText);
                // data.forEach(function(item, i) {
                //     console.log(item);
                //     serverResponse.innerHTML = item;
                // });
                console.log("Ok");
            } else {
                console.log("Error");
            }            
        }

        request.open("GET", "traitements.php", true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.send();
    </script>

    </div> 
</div>
