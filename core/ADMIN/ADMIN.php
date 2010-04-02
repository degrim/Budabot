<?php 
$MODULE_NAME = "ADMIN";

	//Commands	
	bot::regcommand("msg", "$MODULE_NAME/addadmin.php", "addadmin", "admin");
	bot::regcommand("msg", "$MODULE_NAME/kickadmin.php", "kickadmin", "admin");
	bot::regcommand("msg", "$MODULE_NAME/addmod.php", "addmod", "admin");
	bot::regcommand("msg", "$MODULE_NAME/kickmod.php", "kickmod", "admin");	
	bot::regcommand("msg", "$MODULE_NAME/raidleader.php", "raidleader", "mod");
	bot::regcommand("msg", "$MODULE_NAME/kickraidleader.php", "kickraidleader", "mod");	
	bot::regcommand("msg", "$MODULE_NAME/adminlist.php", "adminlist");
	bot::regcommand("priv", "$MODULE_NAME/adminlist.php", "adminlist");	
	bot::regcommand("guild", "$MODULE_NAME/adminlist.php", "adminlist");	

	//Events
	bot::regevent("logOn", "$MODULE_NAME/admin_logon.php");	
	bot::regevent("logOff", "$MODULE_NAME/admin_logoff.php");			
	bot::regevent("24hrs", "$MODULE_NAME/check_admins.php");				

	//Setup
	bot::regevent("setup", "$MODULE_NAME/upload_admins.php");

	//Help Files
	bot::help("adminhelp", "$MODULE_NAME/admin.txt", "mod", "Mod/Admin Help file.", "Administration");
?>