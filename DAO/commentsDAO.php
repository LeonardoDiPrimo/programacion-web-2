<?php

function daoCreateComment($data = array())
{
    $comments = daoGetComments();
    $comments[date('YmdHis')] = array(
        "productId" => $data["productId"],
        "email" => $data["email"],
        "description" => $data["description"],
        "qualification" => $data["qualification"],
        "creationDate" => date('H:i:s d:m:Y')
    );

    $handler = fopen("data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}

function daoGetComments()
{
    if (file_exists("data/comments.json"))
        $comments = json_decode(file_get_contents("data/comments.json"), true);
    else $comments = array();

    return $comments;
}

function daoFindCommentById($commentId)
{
    $comments = daoGetComments();
    return $comments[$commentId];
}

function daoUpdateComment($commentId, $data = array())
{
    $comments = daoGetComments();
    $comments[$commentId] = array(
        "productId" => $data["productId"],
        "email" => $data["email"],
        "description" => $data["description"],
        "qualification" => $data["qualification"],
        "creationDate" => $data["creationDate"]
    );

    $handler = fopen("data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}

function daoDeleteComment($commentId)
{
    $comments = daoGetComments();
    unset($comments[$commentId]);
    $handler = fopen("data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}
