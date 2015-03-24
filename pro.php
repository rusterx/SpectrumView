<?php
if($_GET["path"]){
	$path = file_get_contents("./conf");
	$url ="http://js.mplant.pw/".trim(substr($path,21),"\n")."spectrum.png";
	$format_path = trim($path,"\n");
	system("cd ".$format_path.";python /usr/share/ubuntu_ddp/tool/draw_spec.py");
	echo $url;
}
