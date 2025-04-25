<?php

declare(strict_types=1);

function is_input_empty(string $username, string $email, string $pwd): bool
{
    return empty($username) || empty($email) || empty($pwd);
}

function is_email_invalid(string $email): bool
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_username_taken(PDO $pdo, string $username): bool
{
    if(get_username($pdo, $username)) {
        return true;
    }
    return false;
}

function is_email_registered(PDO $pdo, string $email): bool
{
    if(get_email($pdo, $email)) {
        return true;
    }
    return false;
}

function create_user(PDO $pdo, string $username, string $email, string $pwd): void
{
    set_user($pdo, $username, $email, $pwd);
}