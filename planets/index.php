<?
$a = [];

foreach(scandir(".") as $k=>$v):
	if (strcmp($v, "index.php") === 0) continue;
	$a[] = ["url" => "http://matthewmorrone.com/img/planets/$v"];
endforeach;
array_shift($a);
array_shift($a);
echo json_encode(["wallpapers" => $a]);