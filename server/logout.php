<?php

session_start();

include 'config.php';

session_destroy();

header("location:../login.php?logout");