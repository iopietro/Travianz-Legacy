<?php

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       version.php                                                 ##
##  Developed by:  Shadow                                                      ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################


include("GameEngine/Village.php");
$amount = $_SESSION['amount'];
$start = $generator->pageLoadTimeStart();
if(isset($_GET['newdid'])) {
	$_SESSION['wid'] = $_GET['newdid'];
	header("Location: ".$_SERVER['PHP_SELF']);
}
else {
	$building->procBuild($_GET);
}
$automation->isWinner();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title><?php echo SERVER_NAME ?></title>
	<link REL="shortcut icon" HREF="favicon.ico"/>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<script src="mt-full.js?0faaa" type="text/javascript"></script>
	<script src="unx.js?0faaa" type="text/javascript"></script>
	<script src="new.js?0faaa" type="text/javascript"></script>
	<link href="<?php echo GP_LOCATE; ?>lang/en/lang.css?f4b7c" rel="stylesheet" type="text/css" />
	<link href="<?php echo GP_LOCATE; ?>lang/en/compact.css?f4b7c" rel="stylesheet" type="text/css" />
	<?php
	if($session->gpack == null || GP_ENABLE == false) {
	echo "
	<link href='".GP_LOCATE."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".GP_LOCATE."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	} else {
	echo "
	<link href='".$session->gpack."travian.css?e21d2' rel='stylesheet' type='text/css' />
	<link href='".$session->gpack."lang/en/lang.css?e21d2' rel='stylesheet' type='text/css' />";
	}
	?>
	<script type="text/javascript">

		window.addEvent('domready', start);
	</script>
</head>
<body class="v35 ie ie8">
<div class="wrapper">
<img style="filter:chroma();" src="img/x.gif" id="msfilter" alt="" />
<div id="dynamic_header">
	</div>
<?php include("Templates/header.tpl"); ?>
<div id="mid">
<?php include("Templates/menu.tpl"); ?>
<?php include("Templates/version.tpl"); ?>
<h1>Version Changes</h1>
<div id="products">


1. Modified Plus System with packages.</br>
2. Modified in Plus System and added Account Statement.</br>
3. Enabled Report Player in Profile. Send message to Multihunter. </br>
4. Enabled Graphic Pack in Profile (NOT CODED YET).</br>
5. Enabled in Profile : Auto Completation , Large Map , Report Filter and Time Preferences (NOT CODED YET).</br>
6. Integrate Support Section in game.</br>
7. Modified footer and menu and added version and bugs (I mean detailed version.php and bugs.php).</br>
8. Modified all admin page , now all pictures appers correctly.</br>
9. Added night / day pictures. (thanks to advocaite).</br>
10. Activate inactive player in Admin Panel.</br>
11. Added Server Maintenence in Admin Panel (Not working 100% , i mean mode ban all players).</br>
12. Activate Player Report in Admin Panel (NOT CODED YET).</br>
13. Many bug fixed in Admin Panel.</br>
14. Negative crop fixed , now units die (starvation). WORKS LIKE REAL TRAVIAN !!!</br>
15. Medal fixed.</br>
16. Added new quests (alliance , main building 5 , granary level 3 , warehouse level 5 , palace or residence , 3 settlers , new village , wall).</br>
17. Winner decoded end time fixed , 403 , 404 , 500 errors are now decoded.</br>
18. Populate and regenerate oasis automation function added and fixed.</br>
19. Fixed palace , now cannot be build more than one palace / accout.</br>
20. Now you need a warehouse and granary level 20 to build great granary and great warehouse.</br>
21. Cannot send attacks and send resource to banned players.</br>
22. Now banned palyer cannot recive resource from marketplace.</br>
23. Fix message replay , now can be viwed from who came message.</br>
24. Added in instalation Nature Regeneration Time.</br>
25. Fix oasis.tpl in instalation files.</br>
26. Fix ranking search from everyware.</br>
27. Fix "Finish all constructions for 2 gold." now you dont lose gold when you simply click.</br>
28. Fix bonus on artefacts , now show what bonus gives you.(thanks to brainiacX)</br>
29. Fix settler bug , now you cannot train settlers if you dont have resource. And also modifyResource function updated. (thanks to brainiacX)</br>
30. Fix brewerey now can be build only on capital.</br>
31. Fix treasurey and palace , now cannot be build on WW village.</br>
32. Fix greatbarraks.</br>
33. Fix eraseble hero , now you can delete your hero.</br>
34. Fix desapear hero when you send as reinforcement.</br>
35. Fix message problem with '</br>
36. Fix train hero for unit pretorian</br>
37. Fix merchant quantity</br>
38. Fix battle system for catapults</br>
39. Fix delete player in admin panel</br>
40. Added automated system for give medals and also added in instalation file</br>
41. Fix special characters when send troops</br>
45. Fix bug 10 from NarcisRO list : If you have plus account activated you cannot see the attck/deff/scout images when you attack a village (i mean img on villages : red swords etc..)</br>
43. Fix forum surveys - NOT DONE</br>
44. Fix wall image when spy someone for every tribe</br>
45. Fix the top romans/teutons/gauls icon must show you the first rank of each race,not the whole page</br>
46. Fix destroy village bug</br>
47. Fix conquer oasis.</br>
48. Fix movements.tpl (now show purple sword if your oasis is attacked or if you found new village)</br>
49. Fixed movements on rally point if your oasis is under attack</br>
50. Fixed vulnerability attack on message.</br>
51. Fixed scouting all player when create natars.</br>
52. Fixed catapult if have artefact for random target. Now can target WW even have that artefact like says.</br>
53. Fix special characters on message (script alert not work now).</br>
54. Fix mightiest bug of travian , double troops , now you won`t have any problems with double troops. Works for own units and for enforcement units.</br>
55. Fix catapult target on brewerey , now you can target brewerey.</br>
56. Added loss protection if you have beginner protection and want to attack a player you loss protection.</br>
57. Fix artefacts, will not win more artifacts from the same village.</br>
58. Fix UTF8 in database and sql.sql file.</br>
59. Fixed Username HACK on register.</br>
60. Fixed Village hack in profile . </br>
61. Fixed a Bug where Founder or a user in alliance can kick himself.</br>
62. Fixed new village must build a rally point. </br>
63. Fix sorting distance artefact village . </br>
64. Fix to conquer oasis: can conquer 1 attack if nature troop die. </br>
65. Fix report scout by Natars. Now report player can see.. </br>
66. Fix area and location like real travian. </br>
67. Fix field natar village set to type=3. </br>
68. Fix natar village area 400/400 or WORLD_MAX not the random area. </br>
69. Fix create_account : cannot create natar if already exist. </br>
70. Fix counter timer if timer < 0 = display 0:00:00 and not display like your time pc. </br>
71. Fix quest_core , now is like real travian. </br>
72. Fix update oasis unit. </br>
73. Fixed Registration hack. </br>
74. Fixed Village hack hidden village and <name> ! </br>
75. Fixed hidden Alliance name  and fixed the bug of kicking your self if you are founder or anything else. </br>
76. Fix conquer artefact. </br>
77. Fix ranking and Quest 4. </br>
78. Fix finishAll building/demolition/tecknology. </br>
79. Fix conquer Occupied Oasis. </br>
80. Fix NPC trade on settler in village or palace. </br>
81. Fix bug when paste address to update building or resource , now not possible to upgrade. </br>
82. Fix spy : When defender has no spy's in his village, an incomming spy attack should be unnoticed, and the defender shouldn't get a report and also there shouldn't appear red swords in dorf.1 when there are no own spy's in village.</br>
83. Fix village to destroy and less query. </br>
84. Fix settler to raid (1 unit of settler can carry 3000 resource...wow!!)</br>
85. Fix dorf3 , now timer works corectly. </br>
86. Added timezone in instalation file , and can be edited after installation on config. </br>
87. The damage must be calculate for all troops as a defender. </br>
88. Battle system is fixed and it`s work like real travian. </br>
89. War Simulator system is fixed and it`s work like real travian. </br>
90. Fix calculation culturepoint according to the speed server.</br>
91. Fix to delete hero table when delete user from admin.</br>
92. Fix link to coor village from admin.</br>
93. Fix return troops if village destroy.</br>
94. Fix link list multivillage.</br>
95. Fix rally point to list troops own/other village/oasis.</br>
96. Fix recive report when other player send me reinforcement to my oasis</br>
97. Fix calculate defender hero</br>
98. Fix enforcement oasis</br>
99. Fix hero XP calculation by crop consumed and share point hero xp</br>
100. Fix chiefting village only normal attack can reduce loyalty</br>
101. Fix conquered oasis. Hero must use normal attack if oasis is conquered by other player</br>
102. Fix destroy village.</br>
103. Fix returntroop in oasis when destroy village</br>
104. Fix total point hero and statistics calculation by crop consumption</br>
105. Fix hero reinfocement sometimes mising in action</br>
106. Fix total of trapper bug is full trapp if 1 troop only you send.</br>
107. Fix invalid argument supplied if using masterbuilder</br>
</div>
</div>
</br></br></br></br><div id="side_info">
<?php
include("Templates/multivillage.tpl");
include("Templates/quest.tpl");
include("Templates/news.tpl");
include("Templates/links.tpl");
?>
</div>
<div class="clear"></div>
</div>
<div class="footer-stopper"></div>
<div class="clear"></div>

<?php
include("Templates/footer.tpl");
include("Templates/res.tpl");
?>
<div id="stime">
<div id="ltime">
<div id="ltimeWrap">
Calculated in <b><?php
echo round(($generator->pageLoadTimeEnd()-$start)*1000);
?></b> ms

<br />Server time: <span id="tp1" class="b"><?php echo date('H:i:s'); ?></span>
</div>
	</div>
</div>

<div id="ce"></div>
</body>
</html>
