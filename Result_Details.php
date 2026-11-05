

<html lang="ar">
    <head><title></title>
    <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        #tb_result_sec{
            direction:rtl;
            border: 2px solid #000 ;    
            width: 90%;
            border-spacing:10px;
            margin: 0 auto;
            text-align: center;
            border-collapse: collapse;
        }
        #tb_result_sec_d{
            direction:rtl;
            border: 2px solid #000 ; 
            border-collapse: collapse;   
            width: 90%;
            margin: 0 auto;
            margin-bottom: 20px;
            text-align: center;
        }
        .tb_result_secc{
            text-align: center;
        }
        .tb_result_secc_d .s,.q,.q1{
            border: 1px solid rgb(100, 100, 100) ;
            padding: 30px;
        }
        @font-face {
        font-family: 'Droid Arabic Kufi';
        src: url(Font/DroidKufi-Regular.ttf) format('truetype');
        }
        @media  screen and (max-width: 600px) {
        .q1{
            display: none;
            width: 90%;
        }
  }
    </style>
    </head>
    <body style=' font-size:25px ;color:rgb(100, 100, 100) ;font-family: Droid Arabic Kufi;direction: rtl;' >
        <form action="" style="box-shadow: 3px 3px 5px 5px #888888;border-radius: 5px ; margin: 5px; border: 1px solid rgba(155, 154, 154, 0.753);hight:90%">
            <div>
                <table style="border-bottom: 2px dashed  #000 ;margin: 0 auto; text-align: center; font-size:25px ;color:black">
                    <tr>
                        <td>بيان نتيجة الاختبارات العامة</td>
                    </tr>
                    <tr>
                        <td>الثالث الثانوي - القـسم العلـمي </td>
                    </tr>
                </table><br/>
<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<?php
include "connection.php" ;

 $sql ="SELECT
students.student_number,
students.seat_number,
students.student_name,
certificates.year,
students.school,
students.city,
certificates.max_grade,
certificates.min_grade,
certificates.grade,
certificates.subject
FROM
students,
certificates
WHERE
students.student_number = certificates.student_number AND certificates.year = '2021-2022' AND students.seat_number = '401671'  " ;


$sql2="SELECT
sum(certificates.grade) AS total_grade ,
sum(certificates.max_grade) AS total_max ,
sum(certificates.min_grade) AS total_min ,
(sum(certificates.grade)/COUNT(certificates.grade)) AS avg
FROM
students,
certificates
WHERE
students.student_number = certificates.student_number AND certificates.year = '2021-2022' AND students.seat_number = '401671' ";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
if($result->num_rows > 0){
     $student_data2 = mysqli_fetch_assoc($result2);
    $avg=$student_data2['avg'];
    $total_grade=$student_data2['total_grade'];
    $toral_max=$student_data2['total_max'];
    $toral_min=$student_data2['total_min'];
}


if($result->num_rows > 0){
    $student_data = mysqli_fetch_assoc($result);
$seat_number=$student_data['seat_number'];
    $student_name = $student_data['student_name'];
    $year = $student_data['year'];
$school=$student_data['school'];
$city=$student_data['city'];


            echo" <table id='tb_result_sec'>
                    <tr class='tb_result_secc'; style=' font-size:20px'>
                        <td>رقم الجلوس : $seat_number </td>
                        <td>الاسم : $student_name</td>
                        <td>العام الدراسي : $year</td>
                    </tr >
                    <tr class='tb_result_secc'; style=' font-size:20px'>
                        <td></td>
                        <td>المدرسة : $school</td>
                        <td></td>
                    </tr >
                    <tr class='tb_result_secc'; style=' font-size:20px'>
                        <td></td>
                        <td>المديرية/المدينة: $city</td>
                        <td></td>
                    </tr>
                </table><br>";

                echo'<table id="tb_result_sec_d">
                    <tr class="tb_result_secc_d">
                        <th class="s">المواد الدراسية</th>
                        <th class="s">النهاية الكبرى maximum grades </th>
                        <th class="q1">النهاية الصغرى minimum grades </th>
                        <th class="s">الدرجة المستحقة scores </th>
                    </tr >';
          
    
                        while ($row = mysqli_fetch_assoc($result)) {
                            $subject = $row['subject'];
                            $grade = $row['grade'];
                            $max_grade=$row['max_grade'];
                            $min_grade=$row['min_grade'];
                    
                    echo"<tr class='tb_result_secc_d'>
                        <td class='q'>".$row['subject']."</td>
                        <td class='q'>".$row['max_grade']."</td>
                        <td class='q1'>".$row['min_grade']."</td>
                        <td class='q'>".$row['grade']."</td>
                    </tr >";
                    
              
            }  
            echo"<tr class='tb_result_secc_d'>
            <td class='q'>الاحياء</td>
            <td class='q'>100</td>
            <td class='q1'>50</td>
            <td class='q'>91</td>
        </tr >";

            echo"<tr class='tb_result_secc_d'>
                        <td class='q'>المجموع العام</td>
                        <td class='q'>". $student_data2['total_max']."</td>
                        <td class='q1'>". $student_data2['total_min']."</td>
                        <td class='q'>". $student_data2['total_grade']."</td>
                    </tr >";
            echo" </table>";
       
         echo"<table id='tb_result_sec' style=' border: 1px solid green ;'>
                    <tr class='tb_result_secc' style=' font-size:20px ; border-color : rgb(0,255,0)'>
                        <td>النتيجة النهائية : <span  style='color:red ; font-weight: bold'>ناجح</span> </td>
                        <td>المعدل :<span  style='color:red ; font-weight: bold'>$avg %</span> </td>
                    </tr >
                </table>";

            echo"<div style='text-align:center' ><p><span style='color:red ; font-weight: bold'>*ملاحظة :</span> لايعتبر هذا البيان وثيقة رسمية تغنيك عن الشهادة الاصلية</p></div>";

//echo "$subjects_count";
        }  else {
                echo "<tr><td class='aaa' colspan='5'>لا توجد بيانات</td></tr>";
            }
        //}
                ?>

            </div>
        </form>
    </body>
</html>