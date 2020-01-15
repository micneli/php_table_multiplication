<?php
$title = "Choisir les tables de multiplications";
include "includes/header.php";
include "includes/footer.php";
?>

<div class="container">
<h1>Selectionez les tables de multiplication</h1>
<form id="test-form" class="form-inline" action="" method="POST">
    <?php
    for($i = 1; $i <= 10; $i++) {
        echo '<div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="'.$i.'fois" id="'.$i.'fois" value="'.$i.'">'.$i. 
              '</div>';
    }
    ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input btn bg-info" type="submit" name="submit" value="Afficher" onclick="ajax_post();">
    </div>
</form>

<div id="tables"></div>

<script type="text/javascript">
    function ajax_post() {
        let results = document.getElementById("tables");
        let form = document.querySelector('form');
        let data = new FormData(form);
        console.log(data);
        // Create our XMLHttmRequest object
        const hr = new XMLHttpRequest();
        // Create variables we need to send to our PHP file
        let url = "ajax-test.php";
        
        hr.open("POST", url, true);
        // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function() {
            
            if(hr.readyState === 4 && hr.status === 200) { // hr === this
                let return_data = JSON.parse(hr.responseText);
                results.innerHTML = "";
                for(let obj in return_data) {
                    console.log(data);
                    // results.innerHTML += data[obj];
                }
                // console.log("Ok");
            } else {
                console.log("Error");
            }            
        }
        // Send the data to PHP now... and wait for response to update the status div
        hr.send(data);
        // document.getElementById("status").innerHTML = "processing...";
    }
    </script>

    </div> 
</div>
