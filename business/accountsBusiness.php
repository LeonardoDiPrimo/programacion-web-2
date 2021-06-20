<?php

require_once(DIR_BASE."DAO/accountsDAO.php");

function businessGetAccounts()
{
    return daoGetAccounts();
}

function businessGetAccountExists($email, $password)
{
    return daoGetAccountExists($email, $password);
}
