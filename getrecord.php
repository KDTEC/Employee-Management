<html><head><link rel='stylesheet' type='text/css' href='style.css' /></head><body></body></html>
<?php
$conn=odbc_connect("mydsn2","","");
echo '<h1 style="color:yellow;">Employee you selected</h1><br>';
$result = odbc_exec($conn,"select s.* from [sheet1$]s where s.CPFNO=".$_REQUEST["fname"]);
$result1 = odbc_exec($conn,"select s2.* from [sheet2$]s2 where s2.CPFNO=".$_REQUEST["fname"]);
$result2 = odbc_exec($conn,"select s1.*,s3.* from [sheet1$]s1,[sheet2$]s3 where s1.CPFNO=".$_REQUEST["fname"]."and s3.CPFNO=".$_REQUEST["fname"]);
odbc_result_all($result ,"cellpadding='5' bgcolor='#bbf1c8' border='2px solid'
				style='color:black;font-weight:bold;font-size:1rem;
				display:block;overflow-x:auto;border:4px inset black;'");
echo '<br><br>';
odbc_result_all($result1 ,"cellpadding='5' bgcolor='#bbf1c8' border='2px solid'
				 style='color:black;font-weight:bold;font-size:1rem;
				display:block;overflow-x:auto;border:4px inset black;'");
echo '<br><br>';
echo '<h2 style="color:yellow;font-size:2rem;">Employee Details are:</h2>';

print("<table border=5 solid bgcolor='#bbf1c8' width='100%' cellspacing=8 cellpadding=8 style='font-size:1.3rem;
font-weight:bold;'><th>Personal Information</th><th>Promotion Post</th><th>Year Promoted</th>
<th>Postings</th><th>Posted Year</th><th>E_Level</th><tr>");
while($rows=odbc_fetch_object($result2)){
	print("<td>Name: ".$rows->NAME."<br>CPFNO: ".$rows->CPFNO."<br>".$rows->GENDER_KEY.
		"/".$rows->QUAL_LEVEL."/".$rows->CATEGORY."<br>Designation: ".$rows->DESIGNATION.
		"<br>Mobile no: ".$rows->MOBILE_NO."<br>D.O.R: ".$rows->DATE_OF_RETIREMENT."</td>");
	print("<td>".$rows->DESIGNATION1."<br>".$rows->DESIGNATION2."<br>".$rows->DESIGNATION3.
	"<br>".$rows->DESIGNATION4."<br>".$rows->DESIGNATION5."<br>".$rows->DESIGNATION6."</td>");
	print ("<td>".$rows->DWEF1."<br>".$rows->DWEF2."<br>".$rows->DWEF3."<br>".$rows->DWEF4."<br>"
	.$rows->DWEF5."<br>".$rows->DWEF6."</td>");
	print ("<td>".$rows->POSTING1."<br>".$rows->POSTING2."<br>".$rows->POSTING3."<br>"
	.$rows->POSTING4."<br>".$rows->POSTING5."<br>".$rows->POSTING6."</td>");
	print ("<td>".$rows->WEF1."<br>".$rows->WEF2."<br>".$rows->WEF3."<br>".$rows->WEF4."<br>"
	.$rows->WEF5."<br>".$rows->WEF6."</td>");
	print ("<td>".$rows->E_LEVEL."</td><tr>");
}
print("</table");
?>