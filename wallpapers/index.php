<?
$a = [];

foreach(scandir(".") as $k=>$v):
	$a[] = ["url" => "http://matthewmorrone.com/img/wallpapers/$v"];
endforeach;
array_shift($a);
array_shift($a);
echo json_encode(["wallpapers" => $a]);