<?php
$conn=odbc_connect("mydsn2","","");
$result=odbc_exec($conn,"select*from[Sheet1$]");
echo '<h2 style="color:yellow;text-align:center;font-size:2rem;">Table 1</h2>';
odbc_result_all($result,"cellpadding='5' text-align='center' border='2px solid'
				bgcolor='#bbf1c8' style='color:black;font-weight:bold;font-size:1rem;
				display:block;overflow-x:auto;white-space:nowrap;border:5px solid black;'");
$result=odbc_exec($conn,"select*from[Sheet2$]");
echo '<h2 style="color:yellow;text-align:center;font-size:2rem;">Table 2</h2>';
odbc_result_all($result," cellpadding='5' text-align='center' border='2px solid'
				bgcolor='#bbf1c8' style='color:black;font-weight:bold;font-size:1rem;
				display:block;overflow-x:auto;white-space:nowrap;border:5px solid black;'");
//$result = odbc_exec ($conn, "select *  s.id, s.name, s2.id ,s2.age from
// [sheet1$]s , [sheet2$]s2 where s.CPF NO=s2.CPF NO);

//odbc_exec($conn, "INSERT into [Sheet1$] ([Name], [Age]) values ( 'Kshitiz', '22')");
?>