<?php
/**************************************************************************************************
| 9Gag Clone Script
| http://www.9gagclonescript.com
| webmaster@9gagclonescript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.9gagclonescript.com/eula.html and to be bound by it.
|
| Copyright (c) 9GagCloneScript.com. All rights reserved.
|**************************************************************************************************/

include("include/config.php");
include("include/functions/import.php");
$thebaseurl = $config['baseurl'];

$query="SELECT PID, story, pic FROM posts WHERE active='1' AND nsfw='0' AND pic!='' order by rand() limit 1";
$executequery=$conn->execute($query);
$PID = intval($executequery->fields['PID']);
$title = cleanit($executequery->fields['story']);
$image = cleanit($executequery->fields['pic']);
		
$arr = array('PID' => $PID, 'title' => $title, 'image' => $image);
echo json_encode($arr);
?>