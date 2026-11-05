
<html lang="ar">

    <head>
        
    <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

        <title>yemenexam.com</title>
        
        <link rel="stylesheet"href="css/style.css" />
    
    </head>
    <body style="margin: 0;font-family: Droid Arabic Kufi">
<?php
?>
        <div class="topnav">
<ul class="login">
  <li><a class="active" href="#home">تسجيل الدخول</a></li>
</ul>
<ul class="phone_mail">
    
    <li class="right"><a href="#news">009671540317</a></li>
    <li class="right"><a href="mailto:admin@yemenexam.gov.ye">admin@yemenexam.gov.ye</a></li>
  </ul>
</div>
          
          <div class="navbar-header" >
              <div class="myMenuContainer">
                  <a id ="dis" href="#" >راسلنا</a>
              </div>
              <div class="myMenuContainer">
                  <a href="#">مركز التحميل</a>
              </div>
              <div class="myMenuContainer">
                  <a href="#" class="MyMenuList" onclick="toggleMenu(event,'menu1')">رقم الجلوس</a>
                      <ul id="menu1" class="MyMenu">
                          <li><a href="#">تاســع</a></li>
                          <li><a href="#">ثانوي</a></li>
                      </ul>
              </div>
              <div class="myMenuContainer">
                  <a href="#" class="MyMenuList" onclick="toggleMenu(event,'menu2')">النتائج</a>
                      <ul id="menu2" class="MyMenu">
                          <li><a href="#">تاســع</a></li>
                          <li><a href="#"> ثانوي علمي</a></li>
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
                          <li>تاســع</li>
                          <li>ثانوي</li>
                      </ul>
                  </li>
                  <li onclick="ToggleSublist(event)">النتائج<span class="indicator"></span>
                      <ul class="menu-subList">
                          <li>تاســع</li>
                          <li> ثانوي علمي</li>
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
                  <li>الرئيسية</li>
          
              </ul>
          </div>


        <!------------------------------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------->
        <div class="text">
            <span id="text1">رقم الجلـوس - </span><span id="text2">تاســع</span>
        </div>
        <div class="container">
        <form>
            <label for="fname">أدخل الإسم</label>
            <input type="text" id="fname" name="firstname" placeholder="مثلا: احمد عبداللَه طه ">
            <input type="submit" value="البحث عن رقم الجلـوس">
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

