<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd): bool {
    return empty($username) || empty($pwd);
}

function is_username_wrong(bool|array $result){
    return (!$result) ? true : false;
}

function is_password_wrong(string $pwd, string $hashedPwd): bool {
    return (!password_verify($pwd, $hashedPwd)) ? true : false;
}