<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Accounts InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'after_save Accounts','custom/modules/Accounts/SugarCRMSocket.php','SugarCRMSocket','after_save_account2');

?>
