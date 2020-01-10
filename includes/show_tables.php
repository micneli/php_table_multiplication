<?php
$title = "Choisissez les table de multiplication";
include "header.php";
include "footer.php";
?>

<h1>Selectionez les tables de multiplication</h1>
<form class="form-show" action="" method="GET">
    <input type="checkbox" name="1fois" value="uneFois">1
    <input type="checkbox" name="2fois" value="deuxFois">2
    <input type="checkbox" name="3fois" value="troisFois">3
    <input type="checkbox" name="4fois" value="quattreFois">4
    <input type="checkbox" name="5fois" value="cinqFois">5
    <input type="checkbox" name="6fois" value="sixFois">6
    <input type="checkbox" name="7fois" value="septFois">7
    <input type="checkbox" name="8fois" value="huitFois">8
    <input type="checkbox" name="9fois" value="neufFois">9
    <input type="checkbox" name="10fois" value="dixFois">10
    <input type="submit" name="submit">
</form>

<?php
if(isset($_GET["submit"])) {
    ?>

    
    <h2>Vous avez selectionés les tables suivantes:</h2>
    <div class="tables">
    <?php
        if(isset($_GET["1fois"])) {
            ?>
            <div class="table">
                <p>1 x 1 = 1</p>
                <p>1 x 2 = 2</p>
                <p>1 x 3 = 3</p>
                <p>1 x 4 = 4</p>
                <p>1 x 5 = 5</p>
                <p>1 x 6 = 6</p>
                <p>1 x 7 = 7</p>
                <p>1 x 8 = 8</p>
                <p>1 x 1 = 9</p>
                <p>1 x 10 = 10</p>
            </div>
        <?php
        }
    
        if(isset($_GET["2fois"])) {
            ?>
            <div class="table">
                <p>2 x 1 = 1</p>
                <p>2 x 2 = 4</p>
                <p>2 x 3 = 6</p>
                <p>2 x 4 = 8</p>
                <p>2 x 5 = 10</p>
                <p>2 x 6 = 12</p>
                <p>2 x 7 = 14</p>
                <p>2 x 8 = 16</p>
                <p>2 x 9 = 18</p>
                <p>2 x 10 = 20</p>
            </div>
        <?php
        }
    
        if(isset($_GET["3fois"])) {
            ?>
            <div class="table">
                <p>3 x 1 = 1</p>
                <p>3 x 2 = 6</p>
                <p>3 x 3 = 9</p>
                <p>3 x 4 = 12</p>
                <p>3 x 5 = 15</p>
                <p>3 x 6 = 18</p>
                <p>3 x 7 = 21</p>
                <p>3 x 8 = 24</p>
                <p>3 x 9 = 27</p>
                <p>3 x 10 = 30</p>
            </div>
        <?php
        }
    
        if(isset($_GET["4fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["5fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["6fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["7fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["8fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["9fois"])) {
            echo "Deux fois";
        }
    
        if(isset($_GET["10fois"])) {
            echo "Deux fois";
        }
    ?>
    </div>
    
<?php   
}
?>