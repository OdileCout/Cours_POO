<?php
include_once("../models/User.class.php");
$user = new User();
$users = $user->afficherUser();