<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
};
include 'inc/header.php';
include 'inc/hero.php';
include 'inc/portfolio.php';
include 'inc/contact.php';
include 'inc/footer.php';
include 'inc/scripts.php';
