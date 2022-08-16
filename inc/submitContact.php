<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
};
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $formValid = formValidation($name, $email, $subject, $message);

    if (!empty($formValid)) {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['subject'] = $subject;
        $_SESSION['message'] = $message;
        $_SESSION['errors'] = $formValid;
        header('Location: ../index.php?message=2#contactForm');
    } else {
        if (addContact($name, $email, $subject, $message)) {
            session_unset();
            session_destroy();
            header('Location: ../index.php?message=1#contactForm');
        } else {
            header('Location: ../index.php?message=3#contactForm');
        }
    }
    exit();
}
