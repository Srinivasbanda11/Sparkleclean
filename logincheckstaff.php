<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['staff_no'])) {
	header('location:index.php');
}