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

    
    <h2>Vous avez selectionné les tables suivantes:</h2>
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
            ?>
            <div class="table">
                <p>4 x 1 = 4</p>
                <p>4 x 2 = 8</p>
                <p>4 x 3 = 12</p>
                <p>4 x 4 = 16</p>
                <p>4 x 5 = 20</p>
                <p>4 x 6 = 24</p>
                <p>4 x 7 = 28</p>
                <p>4 x 8 = 32</p>
                <p>4 x 9 = 36</p>
                <p>4 x 10 = 40</p>
            </div>
        <?php
        }
    
        if(isset($_GET["5fois"])) {
            ?>
            <div class="table">
                <p>5 x 1 = 5</p>
                <p>5 x 2 = 10</p>
                <p>5 x 3 = 15</p>
                <p>5 x 4 = 20</p>
                <p>5 x 5 = 25</p>
                <p>5 x 6 = 30</p>
                <p>5 x 7 = 35</p>
                <p>5 x 8 = 40</p>
                <p>5 x 9 = 45</p>
                <p>5 x 10 = 50</p>
            </div>
        <?php
        }
    
        if(isset($_GET["6fois"])) {
            ?>
            <div class="table">
                <p>6 x 1 = 6</p>
                <p>6 x 2 = 12</p>
                <p>6 x 3 = 18</p>
                <p>6 x 4 = 24</p>
                <p>6 x 5 = 30</p>
                <p>6 x 6 = 36</p>
                <p>6 x 7 = 42</p>
                <p>6 x 8 = 48</p>
                <p>6 x 9 = 54</p>
                <p>6 x 10 = 60</p>
            </div>
        <?php
        }
    
        if(isset($_GET["7fois"])) {
            ?>
            <div class="table">
                <p>7 x 1 = 7</p>
                <p>7 x 2 = 14</p>
                <p>7 x 3 = 21</p>
                <p>7 x 4 = 28</p>
                <p>7 x 5 = 35</p>
                <p>7 x 6 = 42</p>
                <p>7 x 7 = 49</p>
                <p>7 x 8 = 56</p>
                <p>7 x 9 = 63</p>
                <p>7 x 10 = 70</p>
            </div>
        <?php
        }
    
        if(isset($_GET["8fois"])) {
            ?>
            <div class="table">
                <p>8 x 1 = 8</p>
                <p>8 x 2 = 16</p>
                <p>8 x 3 = 24</p>
                <p>8 x 4 = 32</p>
                <p>8 x 5 = 40</p>
                <p>8 x 6 = 48</p>
                <p>8 x 7 = 56</p>
                <p>8 x 8 = 64</p>
                <p>8 x 9 = 72</p>
                <p>8 x 10 = 80</p>
            </div>
        <?php
        }
    
        if(isset($_GET["9fois"])) {
            ?>
            <div class="table">
                <p>9 x 1 = 9</p>
                <p>9 x 2 = 18</p>
                <p>9 x 3 = 27</p>
                <p>9 x 4 = 36</p>
                <p>9 x 5 = 45</p>
                <p>9 x 6 = 54</p>
                <p>9 x 7 = 63</p>
                <p>9 x 8 = 72</p>
                <p>9 x 9 = 81</p>
                <p>9 x 10 = 90</p>
            </div>
        <?php
        }
    
        if(isset($_GET["10fois"])) {
            ?>
            <div class="table">
                <p>10 x 1 = 10</p>
                <p>10 x 2 = 20</p>
                <p>10 x 3 = 30</p>
                <p>10 x 4 = 40</p>
                <p>10 x 5 = 50</p>
                <p>10 x 6 = 60</p>
                <p>10 x 7 = 70</p>
                <p>10 x 8 = 80</p>
                <p>10 x 9 = 90</p>
                <p>10 x 10 = 100</p>
            </div>
        <?php
        }
    ?>
    </div>
    
<?php   
}
?>