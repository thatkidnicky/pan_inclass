<?php

function login($username, $password){
    //Debug

    $message = sprintf('You are trying to login username %s and password %s', $username, $password);

    return $message;
}