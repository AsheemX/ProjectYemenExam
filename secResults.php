<html lang="ar">

    <head>
        
    <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <title>yemenexam.com</title>
        
        <link rel="stylesheet"href="css/style.css" />
    
    </head>
    <?php
header('Content-Type: text/html; charset=UTF-8');
?>
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
        <div class="text">
            <span id="text1">نتـائـج  - </span><span id="text2">ثانوي</span>
        </div>
        <div class="container">
        <form action="secResultsSub.php" method="POST">
        
            <label for="year">العام الدراسي  </label><br>
            <select name="year" id="year">
                <option value="2011-2012">2011-2012</option>
                <option value="2012-2013">2012-2013</option>
                <option value="2013-2014">2013-2014</option>
                <option value="2014-2015">2014-2015</option>
                <option value="2015-2016">2015-2016</option>
                <option value="2016-2017">2016-2017</option>
                <option value="2017-2018">2017-2018</option>
                <option value="2018-2019">2018-2019</option>
                <option value="2019-2020">2019-2020</option>
                <option value="2020-2021">2020-2021</option>
                <option value="2021-2022">2021-2022</option>
                <option value="2022-2023" selected>2022-2023</option>
            </select><br/>
            <!--<input type="text" id="year" name="year" placeholder="مثلا: 2022-2023 ">-->
            <label for="seat_number">أدخل رقم الجلـوس</label>
            <input type="text" id="seat_number" name="seat_number" placeholder="مثلا: 123456 ">
            <input type="submit" value="البحث عن نتيجة">
        
        
        </form>
        </div>






<!------------------------------------------------------------------------------------------->
<!-----------------------------------JavaScript---------------------------------------------->
<!------------------------------------------------------------------------------------------->
  <script src="Js\script.js"></script>
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
    </body>
</html>
