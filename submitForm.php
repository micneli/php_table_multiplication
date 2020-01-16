<?php

    if(isset($_GET['num'])) {
        $table = $_GET['num']; // array with the values coming from the checkboxes BEING CHECKED
    ?>
    <div class="tables">
        <?php
        foreach ($table as $value) {
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
?>