<html>

<form name="datesearch" method="post" action="search.php">
Form: <input id="demo1" name="datefrom" type="text" size="25">
<a href="javascript:NewCal('demo1','ddmmyyyy')">
<img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
To: <input id="demo1" name="dateto" type="text" size="25">
<a href="javascript:NewCal('demo1','ddmmyyyy')">
<img src="cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
<input type="submit" value="Submit" >

<?php

require "dbcon.php";             

$page_name="search.php";  
$start=$_GET['start']; 
if(strlen($start) > 0 and !is_numeric($start)){ 
echo "Data Error"; 
exit; 
} 


$eu = ($start - 0);  
$limit = 4;                                 
$this1 = $eu + $limit;  
$back = $eu - $limit;  
$next = $eu + $limit;  



$query2="SELECT * FROM records WHERE mydate =< '".$_GET['datefrom']."' AND mydate >= '".$_GET['dateto']."'; "; 
$result2=mysql_query($query2); 
echo mysql_error(); 
$nume=mysql_num_rows($result2); 


$query=" SELECT * FROM records WHERE mydate =< '".$_GET['datefrom']."' AND mydate => '".$_GET['dateto']."' limit $eu, $limit "; 
$result=mysql_query($query); 
echo mysql_error(); 


while($rows = mysql_fetch_array($result)) 
{ 
if($bgcolor=='#CCCCCC'){$bgcolor='#CCCCCC';} 
else{$bgcolor='#CCCCCC';} 
?> 

<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
            <tr> 
            <td><table width="600" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF"> 
            <tr> 
            <td width="90">Plate No.</td> 
            <td width="6">:</td> 
            <td width="282"><?php echo $rows['firstlevel']; ?></td> 
            </tr> 
            <tr> 
            <td>Machine No.</td> 
            <td>:</td> 
            <td><?php echo $rows['secondlevel']; ?></td> 
            </tr> 
            <tr> 
            <td valign="top">Chase No.</td> 
            <td valign="top">:</td> 
            <td><?php echo $rows['thirdlevel']; ?></td> 
            </tr> 
            <tr> 
            <td valign="top">Meter </td> 
            <td valign="top">:</td> 
            <td><?php echo $rows['mydate']; ?></td> 
            <tr> 
            <td valign="top">Problem </td> 
            <td valign="top">:</td> 
            <td><?php echo $rows['name']; ?></td> 
            <tr> 
            <td valign="top">Remarks </td> 
            <td valign="top">:</td> 
            <td><?php echo $rows['comments']; ?></td> 
            </tr> 
            </table></td> 
            </tr> 
            </table><br /> 
<?php 
echo "</tr>"; 
} 
echo "</table>"; 



if($nume > $limit ){ // Let us display bottom links if sufficient records are there for paging 


echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>"; 

if($back >=0) {  
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>";  
}  

echo "</td><td align=center width='30%'>"; 
$i=0; 
$l=1; 
for($i=0;$i < $nume;$i=$i+$limit){ 
if($i <> $eu){ 
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> "; 
} 
else { echo "<font face='Verdana' size='4'><b>$l</b></font>";}        /// Current page is not displayed as link and given font color red 
$l=$l+1; 
} 


echo "</td><td  align='right' width='30%'>"; 

if($this1 < $nume) {  
print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";}  
echo "</td></tr></table>"; 

}// end of if checking sufficient records are there to display bottom navigational link.  

?>
</form>
</html>