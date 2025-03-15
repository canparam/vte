<?php


function get_primary_language()
{
    return config('app.language_primary') ?? config('app.locale');
}
