<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/uploads'; // Relative to the root

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];//获取文件名称
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;//设置文件保存路径
	$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];//拼接路径及重命名

	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);//文件后缀格式

    //如果文件格式存在$fileTypes中,则正常上传,即限制了上传文件的格式
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		echo '1';
	} else {
		echo 'Invalid file type.';
	}
}
?>