function openTab(evt, tabName) {
  //cartbtn_reload();
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// --------------------------------------------------------//
function storePagePosition() {
  var page_y = window.pageYOffset;
  localStorage.setItem("page_y", page_y);
}
window.addEventListener("scroll", storePagePosition);
var currentPageY;
try {
  currentPageY = localStorage.getItem("page_y");

  if (currentPageY === undefined) {
    localStorage.setItem("page_y") = 0;
  }
  window.scrollTo(0, currentPageY);
} catch (e) {
  // no localStorage available
}
window.onload = function () {
  // cartbtn_reload();
  let card2 = document.getElementsByClassName('card2');
  let btn1 = document.getElementsByClassName('btn1');
  let btn2 = document.getElementsByClassName('btn2');
  let img = document.getElementsByClassName('img');
  let img1 = document.getElementsByClassName('img1');
  let img2 = document.getElementsByClassName('img2');
  let img3 = document.getElementsByClassName('img3');
  let button_mini = document.getElementsByClassName('button_mini');
  let name = document.getElementsByClassName('title');
  let cena = document.getElementsByClassName('cena');
  let aler = document.getElementsByClassName('aler');
  let count = 1;
  let pricetov;

  for (let i = 0; i < btn1.length; i++) {
    btn1[i].onclick = function () {
      card2[i].style.zIndex = '2';
    }
    img[i].onclick = function () {
      card2[i].style.zIndex = '2';
    }
    btn2[i].onclick = function () {
      card2[i].style.zIndex = '1';
    }

    //Клик по img1 или img2
    img1[i].onclick = function () {
      img[i].src = img1[i].src;
    }
    img2[i].onclick = function () {
      img[i].src = img2[i].src;
    }
    img3[i].onclick = function () {
      img[i].src = img3[i].src;
    }
  }
};
//Кнопка вверх сайта pageup
let scrollMax = window.document.documentElement.scrollTopMax;
let butUp = document.querySelector('.pageup');
if (scrollMax > 50) {
  butUp.style.opacity = 0.9;
} else {
  butUp.style.opacity = 1;
};
butUp.onclick = () => {
  let sc = window.pageYOffset;
  window.scrollBy({
    top: -sc,
    behavior: 'smooth'
  });
}


// Нажатие на кнопку Отправить заявку
let btnzayav = document.querySelectorAll(".button_mini");
for (let i = 0; i < btnzayav.length; i++) { 
    btnzayav[i].onclick = function () {
      window.location.href = "zayav.php";
  }
}

// Нажатие на кнопку Личный кабинет администратора сайта
let btnadmin = document.querySelector("#btnAdmin");
    btnadmin.onclick = function () {
      window.location.href = "admin.php";
  }


