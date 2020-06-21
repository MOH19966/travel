<?php


function curr_user()
{

    return auth()->user();
}

function curr_user_id()
{

    return auth()->user()->id;
}


