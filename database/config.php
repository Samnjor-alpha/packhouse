<?php
if (!isset($_SESSION)){
    session_start();
}
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'janifresh';
const  BASE_URL='http://localhost/packhouse/';
const EMAIL_USE_SMTP = true;
const EMAIL_SMTP_HOST = "smtp.gmail.com";
const EMAIL_SMTP_AUTH = true;
const EMAIL_SMTP_USERNAME = "mbukoniservice@gmail.com";
const EMAIL_SMTP_PASSWORD = "jbsfymxxtigymwzl";
const EMAIL_SMTP_PORT = 587;
const EMAIL_SMTP_ENCRYPTION = "tsl";
const EMAIL_NOTIFICATION_CONTENT = "your account was Created successfully.Use this password to login.";
const EMAIL_NOTIFICATION_SUBJECT = "Account Created successfully!!";
const EMAIL_NOTIFICATION_FROM_NAME = "JANIFRESH";
const EMAIL_RESET_SUBJECT="Verification";
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);