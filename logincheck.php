<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['user_no'])) {
	header('location:index.php');
}
