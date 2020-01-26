<?php
ini_set('memory_limit','700M');
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$RemoteFile = ''; //File URL
$RemoteFileArr = explode("/", $RemoteFile);
$RemoteFileName = $RemoteFileArr[count($RemoteFileArr) - 1];

echo file_put_contents($RemoteFileName, file_get_contents($RemoteFile, false, stream_context_create($arrContextOptions)));
?>
