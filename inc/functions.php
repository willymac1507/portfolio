<?php

/**
 * @param $name
 * @param $email
 * @param $subject
 * @param $message
 * @return array|null
 */
function formValidation($name, $email, $subject, $message): ?array
{
    $errors = [];
    $emailPattern = '/^(([^<>()\[\]\\.,;:\s@"]+('
        . '\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[\d{1,3}\.'
        . '\d{1,3}\.\d{1,3}\.\d{1,3}])|(([a-zA-Z\-\d]+\.)+[a-zA-Z]{2,}))$/';
    if (strlen($name) == 0) {
        $errors[] = array (
            'field' => 'name',
            'error' => 'blank'
        );
    }
    if (strlen($email) == 0) {
        $errors[] = array (
            'field' => 'email',
            'error' => 'blank'
        );
    } else {
        if (!preg_match($emailPattern, $email) == 1) {
            $errors[] = array (
                'field' => 'email',
                'error' => 'invalid'
            );
        }
    }
    if (strlen($subject) == 0) {
        $errors[] = array (
            'field' => 'subject',
            'error' => 'blank'
        );
    }
    if (strlen($message) == 0) {
        $errors[] = array (
            'field' => 'message',
            'error' => 'blank'
        );
    }
    if (empty($errors)) {
        return null;
    } else {
        return $errors;
    }
}

/**
 * @param $name
 * @param $email
 * @param $subject
 * @param $message
 * @return bool
 */
function addContact($name, $email, $subject, $message): bool
{
    include 'connection.php';
    $datePosted = date("Y-m-d H:i:s");

    $sql = 'INSERT INTO contacts '
        . '(name, email, subject, message, `date-posted`) '
        . 'VALUES (?, ?, ?, ?, ?)';
    $query = $db->prepare($sql);
    $query->bindParam(1, $name, PDO::PARAM_STR);
    $query->bindParam(2, $email, PDO::PARAM_STR);
    $query->bindParam(3, $subject, PDO::PARAM_STR);
    $query->bindParam(4, $message, PDO::PARAM_STR);
    $query->bindParam(5, $datePosted, PDO::PARAM_STR);

    try {
        $query->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
