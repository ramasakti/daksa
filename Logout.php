<?php

session_start();
session_unset();
session_destroy();

header('location: Daksa_Login.php');