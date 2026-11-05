
    document.getElementById("menu-button").addEventListener("click",function() 
    {
        var menuList = document.getElementById("menu-list");
        menuList.style.display = menuList.style.display ==="block" ? "none" : "block";
    });



    function ToggleSublist(event) {
        event.stopPropagation();// عشان الحدث مايتطبق على العناصر اللي اعلى منه(الاب)
        var sublist = event.target.querySelector(".menu-subList");
        sublist.style.display=(sublist.style.display==="none") ? "block" : "none";
    }




    function toggleMenu(event,menuId)
    {
        event.preventDefault();//تُمنع السلوك الافتراضي للحدث، مثل انتقال إلى صفحة جديدة عند النقر على 
        var menu = document.getElementsByClassName("MyMenu");
        for (let index = 0; index < menu.length; index++) {
            if(menu[index].id===menuId){
                menu[index].style.display=(menu[index].style.display==='none') ? 'block': 'none';
            }
            else{
                menu[index].style.display='none'; 
            }
        }
        
        if (menu.style.display==="" || menu.style.display==="none"){
            menu.style.display="block";
        }
        else{
            menu.style.display="none"
        }
    }


   /* document.getElementById("menu-button").addEventListener("click", function() {
      var navbarLinks = document.querySelectorAll(".navbar-header a:not(:first-child)");
      navbarLinks.forEach(function(link) {
        link.style.display = link.style.display === "none" ? "block" : "none";
      });
    });*/

    
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var slides = document.getElementsByClassName("slideshow-container")[0].getElementsByClassName("slide");
      var slideContents = document.getElementsByClassName("slideshow-container")[0].getElementsByClassName("slide-content");
      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";//يتم إخفاء جميع الشرائح عن طريق تعيين خاصية العرض للقيمة "none".
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;//إذا كانت قيمة "slideIndex" أكبر من عدد الشرائح، سيتم إعادة تعيينها إلى واحد.
      }
      slides[slideIndex - 1].style.display = "block";
      slideContents[slideIndex - 1].style.display = "block";
      slides[slideIndex - 1].addEventListener("transitionend", function() {
        this.style.display = "none";// يتم إضافة مستمع الحدث "transitionend" إلى الشريحة الحالية لإخفائها عندما يتم انتهاء التحول.
      });
      
      setTimeout(showSlides, 3000);//يتم استدعاء الدالة بعد مرور 3 ثواني .. مما يؤدي الى تحديث الشريحة بشكل تلقائي بعد كل 3 ثواني
    }
 
