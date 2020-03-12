<html>
<body>

Data posted was: <b><?php echo $_POST["data1"]; ?></b><br>

<h2>Request Header</h2>                                             
<?php                                                               
echo '<table>' ;                                                    
foreach (getallheaders() as $name => $value) {                      
    echo '<tr><td>'.$name.'</td><td>' . $value . '</td></tr>';      
}                                                                   
echo '</table>';                                                    
?>                                                                  
</body>
</html> 
