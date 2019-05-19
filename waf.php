<?php

// Coded by Versailles - viloid - cans21
// Sec7or Team - Surabaya HackerLink

/*
 BAD FILTER CODE
*/

function waf_addslashes($id){
	$id = addslashes($id);
	return $id;
}

function waf_replace($id){
	$id = preg_replace('/union/si', "", $id);
	$id = preg_replace('/select/si', "", $id);
	$id = preg_replace('/concat/si', "", $id);
	return $id;
}

function waf_block_word($id){
	if(preg_match('/-|group_concat|concat|concat_ws|-- -|--+/i', $id))
        {
            die("<h1>403 Forbidden</h1>");
            exit;
        }
    return $id;
}