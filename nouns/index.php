<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../psi.png">
    <script src="../jquery.js"></script>
    <title>Icon Gallery</title>
    <style>
    html
    {
        height: 100%;
    }
    body
    {
        font-family: helvetica;
        padding: 20px;
        color: #fff;
        background: #575757;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(yellow), to(blue));
    }
    table {border-collapse: collapse;}
    td {border: 1px solid black;}
    table tr:first-child td {border-top: none;}
    table tr:last-child td {border-bottom: none;}
    table tr td:first-child {border-left: none;}
    table tr td:last-child {border-right: none;}
    table tr:last-child td:last-child {border-right: 1px solid black;}
    img
    {
        height: 50%;
        margin: 10px;
    }
    #left
    {
        float: left;
        height: 100%;
        width: 50%;
    }
    p
    {
        margin: 3px 0;
    }
    </style>
</head>
<body>
<?php
$counter = 0;
print "<table>";
$dir = "../nouns";
if (is_dir($dir)){
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			if ($file == "." || $file == ".." || substr($file, 0, 1) == ".") {continue;}
			if ($counter % 8 == 0) {print "<tr>";}
			print("<td><img title='".substr($file, 0, count($file)-5)."' src='".$dir."/".$file."'></img></td>");
			if ($counter % 8 == 7) {print "</tr>";}
			$counter++;}}}
print "</table>";
?>
</body>
</html>

