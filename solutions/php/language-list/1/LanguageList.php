<?php

function language_list(...$items)
{
    return $items;
}
function add_to_language_list($language_liste,$new_language){
    $language_liste[] = $new_language;
    return $language_liste;
}
function prune_language_list($language_liste){
    array_shift($language_liste);
    return $language_liste;
}
function current_language($language_liste){
    return $language_liste[0];
}
function language_list_length($language_liste){
    $nombre=count($language_liste);
    return $nombre;
}
