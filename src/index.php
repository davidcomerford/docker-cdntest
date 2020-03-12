<html>
<head>
<style>
body {
  font-size: 12px;
}
p {
  font-size: 12px;
}
table {
  width:100%;
  font-size: 12px;
}
table, th, td {
  border: 1px solid gray;
  border-collapse: collapse;
  width: auto
}
th, td {
  padding: 3px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>

<h1>Daves CDN Testing Container</h1>
<br/>

<h2>Large Images</h2>
<img height="200" width="200" src="images/curiosity21.jpg">
<img height="200" width="200" src="images/earth7.jpg">
<img height="200" width="200" src="images/iss3.jpg">  
<img height="200" width="200" src="images/suit3.jpg">
<br/>

<h2>Request Headers</h2>
<?php
echo '<table>' ;
foreach (getallheaders() as $name => $value) {
    echo '<tr><td>'.$name.'</td><td>' . $value . '</td></tr>';
}
echo '</table>';
?>


<h2>Server Data</h2>
<?php
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table>' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>';
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>';
    }
}
echo '</table>';
?>
</html>

<h2>HTTP POST Test</h2>
<form action="posted.php" method="post">
Data to post: <input type="text" name="data1"><br>
<input type="submit">
</form>
