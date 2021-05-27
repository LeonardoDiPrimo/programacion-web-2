<?php

function saveComment($data = array())
{
    $comments = getComments();
    $comments[date('YmdHis')] = array(
        "productId" => $data["productId"],
        "email" => $data["email"],
        "description" => $data["description"],
        "qualification" => $data["qualification"],
        "creationDate" => date('H:i:s d:m:Y')
    );

    $handler = fopen("../data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}

function getComments()
{
    if (file_exists("../data/comments.json"))
        $comments = json_decode(file_get_contents("../data/comments.json"), true);
    else $comments = array();

    return $comments;
}

function getComment($commentId)
{
    $comments = getComments();
    return $comments[$commentId];
}

function modifyComment($data = array(), $commentId)
{
    $comments = getComments();
    $comments[$commentId] = array(
        "productId" => $data["productId"],
        "email" => $data["email"],
        "description" => $data["description"],
        "qualification" => $data["qualification"],
        "creationDate" => date('H:i:s d:m:Y')
    );

    $handler = fopen("../data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}

function deleteComment($commentId)
{
    $comments = getComments();
    unset($comments[$commentId]);
    $handler = fopen("../data/comments.json", "w");
    fwrite($handler, json_encode($comments));
    fclose($handler);
}
