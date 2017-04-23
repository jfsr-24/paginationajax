<?php
// $dbhost = getenv("OPENSHIFT_MYSQL_DB_HOST");
// $dbuser = getenv("OPENSHIFT_MYSQL_DB_USERNAME");  
// $dbpass = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");//"bCH2nl1B1a8T";  
// $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');  
// $dbname = getenv("OPENSHIFT_APP_NAME");//'phpgit';  
// $connection = mysql_select_db($dbname);

include('dbcon.php'); 

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM posts ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {
?>  
    <tr>  
    <td><?php  echo $row["title"]; ?></td>  
    <td><?php  echo $row["body"]; ?></td>  
    </tr>  
<?php  
};  
?>  
</tbody>  
</table>