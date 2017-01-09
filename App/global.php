<?php
require("config.php");

date_default_timezone_set("UTC");

session_start();

try
{
  $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
  echo "Cannot connect to database.";
	exit;
}

$authenticated_user = $_SESSION["authenticated_user"];
$authenticated = isset($authenticated_user) ? true : false;

if ($authenticated) {
  $sql = $db->prepare("UPDATE users SET activity=CURRENT_TIMESTAMP WHERE username=?");
  $sql->execute([$authenticated_user]);
}

if ($_GET["signout"]) if (session_destroy()) header("location: /");

include("controllers/vault.php");
$vault = new Vault();

function time_elapsed($datetime, $full = false)
{
	$now = new DateTime;
	$ago = new DateTime($datetime);
	$diff = $now->diff($ago);

	$diff->w = floor($diff->d / 7);
	$diff->d -= $diff->w * 7;

	$string = [
		"y" => "year",
		"m" => "month",
		"w" => "week",
		"d" => "day",
		"h" => "hour",
		"i" => "minute",
		"s" => "second",
	];

	foreach ($string as $k => &$v)
  {
		if ($diff->$k)
    {
			$v = $diff->$k . " " . $v . ($diff->$k > 1 ? "s" : "");
		}
    else
    {
			unset($string[$k]);
		}
	}

	if (!$full) $string = array_slice($string, 0, 1);
	return $string ? implode(", ", $string) . " ago" : "just now";
}
?>
