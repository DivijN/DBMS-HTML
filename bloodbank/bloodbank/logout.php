<?php
session_start();
session_destroy();
unset($_SESSION['uid']);
echo"<script>alert('SUCCESSFULLY LOGGED OUT');window.location.assign('minid1.html');</script>";
