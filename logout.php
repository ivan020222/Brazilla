<?php

session_start();

require 'source/auth.php';

logout();

header('Location: index.php');