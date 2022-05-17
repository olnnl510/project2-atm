<?php
    session_start();
    session_destroy(); // destroy, unset 둘다 상관없음
    header("Location: main_1.php");