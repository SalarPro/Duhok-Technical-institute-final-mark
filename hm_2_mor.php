

<br><br><br>

<TABLE  style='font-size:20px;color: black;' align='center' cellpadding='10' width='80%'   >
           
<tr bgcolor='#ffffff' class='active' align='center'>
<TD width='50%'>


<img src="src/logo1.png" alt="HTML5 Icon" style="width:200px;height:128px;
  object-fit: cover;">
</TD>
<TD width='50%'>

<h2>
زانكویا پولیته‌كنیكی یا دهوك
<br>
په‌یمانگه‌ها ته‌كنیكی کارگێرى
</h2>

</TD>
</tr>

</table>
   
        
<br><br><br>

<?php
require('inc/connect.php');


date_default_timezone_set('asia/baghdad');

        $sql = mysqli_query( $link,"SELECT * FROM hm_2_mor WHERE code = '".$_SESSION['std_code']."' LIMIT 1;");
        echo "<form method='post'>";



        /*echo "<TR bgcolor='#3498db' class='active' align='center'>
            <TD width='5'><B>Absent</B></TD>
            <TD width='150'><B>Name</B></TD>
            <TD width='20'><B>Total Absent</B></TD>
            </tr>";*/

           $c_count = 0;
            

        while ( $myrow = mysqli_fetch_assoc($sql) ) {
            $c_count++; 

            if( $myrow[ "complete_payment" ] == '0') {

                echo "<h1 style='font-size:30px;color: #650000;' align='center'> ".$myrow[ "student_name" ]."</h1>";
                echo "<h1 style='font-size:50px;color: #650000;' align='center'> هیڤی یە سەرەدانا هوبا دارایی بکە </h1>";
            }else
            
            echo " <TABLE  style='font-size:20px;color: black;' align='center' cellpadding='10' width='80%'   >
           
<tr bgcolor='#ffffff' class='active' align='center' style='color: black;'>
<TD width='100%' colspan='2'>ئه‌نجامێت وه‌رزێ ئێكێ يا سالا خاندنێ  2021 - 2022</TD>
</tr>

<tr class='active' align='center'>
<TD bgcolor='#CCDDFF'   width='50%' ><B>".$myrow[ "student_name" ]."</B></TD>
<TD bgcolor='#87AFFF'  width='50%' ><B>ناڤێ قوتابي</B></TD>
</tr>


<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "dep" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>بەش</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Stage" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>قوناغ</B></TD>
</tr>


<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>
<tr bgcolor='#0098db00'>
    
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#87AFFF' width='50%' ><B>هه‌لسه‌نگاندن</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>بابەت</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Administrative_Correspondence" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>تحرير الكتب الإدارية - Administrative Correspondence</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Hospital_Management" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>ادارة المستشفيات - Hospital Management</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Public_Health" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>صحة عامة - Public Health</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Health_Services_Marketing" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>تسويق خدمات صحية - Health Services Marketing</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Professional_Ethics" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>اخلاقيات المهنة - Professional Ethics</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Warehouse_Management" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>إدارة المخازن - Warehouse Management</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Health_Information_Technology" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>تقنية المعلومات الصحية - Health Information Technology</B></TD>
</tr>

<tr  class='active' align='center'>
<TD bgcolor='#CCDDFF' width='50%' ><B>".$myrow[ "Civil_Law" ]."</B></TD>
<TD bgcolor='#87AFFF' width='50%' ><B>قانون الخدمة المدنية - Civil Law</B></TD>
</tr>




<tr bgcolor='#FDEFFF' class='active' align='center'>
<TD width='100%' colspan='2' STYLE='color: black;'><B>ئه‌ڤ به‌لگـه‌نامـه‌ ناهێتـه‌ بـكارئينـان وه‌ك به‌لگـه‌نامـه‌كا فه‌رمـى</B></TD>
</tr>


</TABL>


"
;
            
            
            /*echo "<tr  bgcolor='#2ecc71'><td>". $myrow[ "student_name" ] . " </td>";
             echo "<td align='center'>". $myrow[ "Column_1_Intermediate_Accounting_I" ] . " </td>";
            echo "</tr>";*/
        }


        if ($c_count == 0) {
            echo "<h1>Wrong Code</h1>";
        }
        /*echo "<tr><td align='center' bgcolor='#ffbbbb' colspan='3'><input class='button button3' name='submentbtn' type='submit' value='Submit'></td></tr>";
        echo "</TABLE></form>";*/

?>