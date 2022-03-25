<?php

$host = "mysql.aqcis.xyz";
$user = "veddegre";
$passwd = "1newuser";
$dbname = "veddegre_hof";

// Number of rows to show per page
$rowsperpage = 8;

// Display site or coming soon page (true for live)
$live = "true";

// Site path
$basepath = "/home/runner/hof2";

// No result error message
$noresultmessage = "<td align=\"center\" class=\"underConst\">This section is under construction, please check back soon as new information is added daily.</td></tr></table>";

// Stop editing at this point

$conn = new mysqli($host, $user, $passwd);
$db = $conn->select_db($dbname);
?>
