<?php
    require_once ('database.php');
    $response = mysqli_query($connect,"SELECT * FROM new_table order by updatetime desc limit 15");
    // $number = 10;
    // $total = mysqli_num_rows($response);
    // $pages = ceil($total/$number);

    $aaray = array();
    while ($fetch = mysqli_fetch_array($response)) {
        $temp[] = $fetch['temp'];
        $trans[]= $fetch['vol'];
    }
    $temp = json_encode($temp);
    $trans = json_encode($trans);

    


    mysqli_close($connect);

    
?>