<?php
    function randomArr($arr,$num){
        $filteredArr = array_filter($arr);
        $randKeys = array_rand($filteredArr,$num);
        $randArr=[];
        for($i=0; $i<$num; $i++){
            array_push($randArr,$filteredArr[$randKeys[$i]]);
        }
        return $randArr;
    }
    $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
    print_r(randomArr($planets,2));
?>