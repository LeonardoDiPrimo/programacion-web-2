<?php

require_once("DAO/commentsDAO.php");

function businessCreateComment($data = array())
{
    daoCreateComment($data);
}

function businessGetComments()
{
    return daoGetComments();
}

function businessFindCommentById($commentId)
{
    return daoFindCommentById($commentId);
}

function businessUpdateComment($commentId, $data = array())
{
    daoUpdateComment($commentId, $data);
}

function businessDeleteComment($commentId)
{
    daoDeleteComment($commentId);
}
