<?php

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
	if(preg_match('/-|concat/i', $id))
        {
            die("<h1>403 Forbidden</h1>");
            exit;
        }
    return $id;
}

function waf_block_or($id){
	if(preg_match('/-|or/i', $id))
        {
            die("<h1>403 Forbidden</h1>");
            exit;
        }
    return $id;
}
