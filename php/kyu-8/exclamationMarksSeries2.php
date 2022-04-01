<?php
/*
    DESCRIPTION

    Remove all exclamation marks from the end of sentence.

    Examples
    remove("Hi!") === "Hi"
    remove("Hi!!!") === "Hi"
    remove("!Hi") === "!Hi"
    remove("!Hi!") === "!Hi"
    remove("Hi! Hi!") === "Hi! Hi"
    remove("Hi") === "Hi"
*/

function remove(string $s): string {
    return rtrim($s, "!");
}