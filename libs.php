<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'input' :
            include 'views/input_data.php';
            break;
        case 'data' :
            include 'views/tampil_data.php';
            break;
    }
} else {
    include 'views/tampil_data.php';
}

?>