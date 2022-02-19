<?php

/*
    DESCRIPTION
*/

function count_languages(array $arr): array
{
    return array_count_values(array_column($arr, "language"));
}