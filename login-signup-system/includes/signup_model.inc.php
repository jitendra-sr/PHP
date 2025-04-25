<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = ?;";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $email, string $pwd): void
{
    $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?);";
    $stmt = $pdo->prepare($query);
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, ['cost' => 12]);
    $stmt->execute([$username, $email, $hashedPwd]);
}