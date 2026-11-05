<html  lang="ar">
    <head><title>yemenexam.com</title>
    <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet"href="css/style.css" />
    <style>
        table {
  border-collapse: collapse;
  width: 90%;
  margin:0 auto;
}
.ssss:nth-child(even) {background-color: #f2f2f2;}
th, .aaa {
  padding: 8px;
  text-align: right;
  border-bottom: 1px solid #ddd;
}

.ssss:hover {background-color:#f5f5f5;}
        </style>
    </head>
    <body style="margin: 0;font-family: Droid Arabic Kufi">

    <div class="topnav">
<ul class="login">
  <li><a class="active" href="#home">تسجيل الدخول</a></li>
</ul>
<ul class="phone_mail">
    
    <li class="right"><a href="#news">009671540317</a></li>
    <li class="right"><a href="mailto:admin@yemenexam.gov.ye">admin@yemenexam.gov.ye</a></li>
  </ul>
</div>

<div class="navbar-header">
    <div class="myMenuContainer">
        <a id ="dis" href="#" >راسلنا</a>
    </div>
    <div class="myMenuContainer">
        <a href="#">مركز التحميل</a>
    </div>
    <div class="myMenuContainer">
        <a href="#" class="MyMenuList" onclick="toggleMenu(event,'menu1')">رقم الجلوس</a>
            <ul id="menu1" class="MyMenu">
                <li><a href="ninthSeatNumber.php">تاســع</a></li>
                <li><a href="secSeatNumber.php">ثانوي</a></li>
            </ul>
    </div>
    <div class="myMenuContainer">
        <a href="#" class="MyMenuList" onclick="toggleMenu(event,'menu2')">النتائج</a>
            <ul id="menu2" class="MyMenu">
                <li><a href="#">تاســع</a></li>
                <li><a href="secResults.php"> ثانوي علمي</a></li>
                <li><a href="#">ثانوي أدبي</a></li>
            </ul>
    </div>
    <div class="myMenuContainer">
        <a href="#">الخدمات</a>
    </div>
    <div class="myMenuContainer" >
        <a href="#" class="MyMenuList" onclick="toggleMenu(event,'menu3')">عن الإدارة</a>
            <ul id="menu3" class="MyMenu">
                <li><a href="#">عن الادارة</a></li>
                <li><a href="#"> كامة الوكيل</a></li>
                <li><a href="#"> كلمة المدير العام</a></li>
            </ul>
    </div>
    <div class="myMenuContainer">
        <a href="index.html">الرئيسية</a>
    </div>
    <button id="menu-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
      </svg>
    </button>
        
    <h1><a class="navbar-brand" href="/Home/Index">
        <div style="display: inline-block;">
        <i>E</i>
        <span>xamination</span>
        </div>
    </a></h1>
    
</div>
<div >
    <ul id="menu-list"  >
        <li>راسلنا</li>
        <li>مركز التحميل</li>
        <li onclick="ToggleSublist(event)">رقم الجلوس<span class="indicator"></span>
            <ul class="menu-subList">
                <li><a class="link-subList" href="ninthSeatNumber.php">تاســع</a></li>
                <li><a class="link-subList" href="secSeatNumber.php">ثانوي</a></li>
            </ul>
        </li>
        <li onclick="ToggleSublist(event)">النتائج<span class="indicator"></span>
            <ul class="menu-subList">
                <li>تاســع</li>
                <li><a class="link-subList" href="secResults.php"> ثانوي علمي</a></li>
                <li> ثانوي أدبي</li>
            </ul>
        </li>
        <li>الخدمات</li>
        <li onclick="ToggleSublist(event)">عن الادارة<span class="indicator"></span>
            <ul class="menu-subList">
                <li>عن الإدارة</li>
                <li> كلمة الوكيل</li>
                <li> كلمة المدير العام</li>
            </ul>
        </li>
        <li><a class="link-subList" href="index.html"> الرئيسية</a></li>

              </ul>
          </div>


        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <form action="" method="POST">
        <div class="text">
            <span id="text1">رقم الجلـوس - </span><span id="text2">ثانـوي</span>
        </div><br/>



        <!------------------------------------------------------------------------------------------------>

<?php
include "connection.php" ;

$student_name=$_POST['student_name'];
$sql ="SELECT students.seat_number, students.student_name FROM students WHERE students.student_name LIKE '%$student_name%';";

$result = $conn->query($sql);
if($result->num_rows > 0){
    echo"<table  class='sss'>";
    echo"<tr class='ssss'>";
        echo"<th>رقم الجلـوس</td>";
        echo "<th>اسم الطالب</td>";
        echo "</tr>";
        
    while ($row = mysqli_fetch_assoc($result)) {
        
        
        echo "<tr class='ssss'>";
        echo "<td class='aaa'>" . $row['seat_number'] . "</td>";
        echo "<td class='aaa'>" . $row['student_name'] . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}else{
     echo "<tr><td class='aaa' colspan='5'>لا توجد بيانات</td></tr>";
   
// die(Error in query);

}


?>
<!------------------------------------------------------------------------------------------->
<!-----------------------------------JavaScript---------------------------------------------->
<!------------------------------------------------------------------------------------------->
<script src="Js\script.js"></script>
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
   

</body>
</html>