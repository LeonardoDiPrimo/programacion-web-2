<?php

function daoGetAccounts()
{
    if (file_exists(DIR_BASE . "data/accounts.json")) {
        $accounts = json_decode(file_get_contents(DIR_BASE . "data/accounts.json"), true);
    } else {
        $accounts = array();
    }
    return $accounts;
}

function daoGetAccountExists($email, $password)
{
    $accountFilter = array();
    foreach (daoGetAccounts() as $account) {
        if ($account["email"] == $email && $account["password"] ==  $password) array_push($accountFilter, $account);
    }
    return $accountFilter;
}
