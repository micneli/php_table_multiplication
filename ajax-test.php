<?php
if(isset($_GET["submit"])) {
    // $arr = [
    //     isset($_GET["1fois"]), isset($_GET["2fois"]), isset($_GET["3fois"]), isset($_GET["4fois"]), isset($_GET["5fois"]), isset($_GET["6fois"]), isset($_GET["7fois"]), isset($_GET["8fois"]), isset($_GET["9fois"]), isset($_GET["10fois"])
    // ]; // these lines are equivalent to lines 27-30
    $arr = [];
    for($i = 0; $i < 10; $i++) {
        $arr[$i] = (isset($_GET[($i+1).'fois']));
        }

    $arr_json = json_encode($arr);
    echo($arr_json);
}