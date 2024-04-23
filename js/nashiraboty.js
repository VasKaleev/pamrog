const template = document.querySelector('.cards-wrapper');
const card = document.querySelector('.card');

nashiRaboty().forEach(art => {  
  const artElem = document.importNode(card, true);
  for (const key in art) {
    if (key === 'img') {
      artElem.querySelector('.img').src = art.img;
    }
    if (key === 'img1') {
      artElem.querySelector('.img1').src = art.img1;
    }
    if (key === 'img2') {
      artElem.querySelector('.img2').src = art.img2;
    }
    if (key === 'img3') {
      artElem.querySelector('.img3').src = art.img3;
    }
    if ((key != 'img') || (key != 'img1') || (key != 'img2') || (key != 'img3')) {  
      artElem.querySelector('.' + key).textContent = art[key];
    }
  }
  template.appendChild(artElem)
});

//Наши работы в меню наши работы
function nashiRaboty() {
  return [
    {
      "img": "./assets/imgraboty/memk1.png",
      "img1": "./assets/imgraboty/memk2.png",
      "img2": "./assets/imgraboty/memk3.png",
      "img3": "./assets/imgraboty/memk4.png",
      "title": "Мемориал из черного гранита",
      "razm": "Размер: любой",
      "cenaold": "от 8000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": " Комплексы из гранита могут быть изготовлены из двух и даже трех видов камня. Сочетание может быть предложено мастером или выбрано клиентом. Оно, как правило, основывается на контрасте. Наиболее часто используются такие виды гранита, как Аврора, Куру Грэй, Балтик Грин, Блю Перл и некоторые другие."
    },
    {
      "img": "./assets/imgraboty/m1.png",
      "img1": "./assets/imgraboty/m2.png",
      "img2": "./assets/imgraboty/m3.png",
      "img3": "./assets/imgraboty/m1.png",
      "title": "Мемориал из черного гранита",
      "razm": "Размер: любой",
      "cenaold": "от 8000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Величественный памятник на могилу, высечен из благородного карельского гранита высшего сорта. Этот изысканный монумент станет символом вечной памяти и уважения к ушедшему. Гарантия на гранит в течение 30 лет подчеркивает его долговечность, а полировка со всех сторон добавляет блеск и изысканность."
    },
    {
      "img": "./assets/imgraboty/cv1.png",
      "img1": "./assets/imgraboty/cv2.png",
      "img2": "./assets/imgraboty/cv3.png",
      "img3": "./assets/imgraboty/cv4.png",
      "title": "Мемориал из цветного гранита",
      "razm": "Размер: любой",
      "cenaold": "от 8000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Величественный памятник на могилу, высечен из благородного карельского гранита высшего сорта. Этот изысканный монумент станет символом вечной памяти и уважения к ушедшему. Гарантия на гранит в течение 30 лет подчеркивает его долговечность, а полировка со всех сторон добавляет блеск и изысканность."
    },
    {
      "img": "./assets/imgraboty/o1.png",
      "img1": "./assets/imgraboty/o2.png",
      "img2": "./assets/imgraboty/o3.png",
      "img3": "./assets/imgraboty/o4.png",
      "title": "Ограды металлические, гранитные, кованые. ",
      "razm": "Большой ассортимент оград.",
      "cenaold": "1000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Ограда на могилу используется для оформления границ участка. Она придаст законченный вид обустройству захоронения. Ограда на могилу сегодня стала не простой изгородью, а целым произведением искусства."
    },
    {
      "img": "./assets/imgraboty/od1.png",
      "img1": "./assets/imgraboty/od2.png",
      "img2": "./assets/imgraboty/od3.png",
      "img3": "./assets/imgraboty/od1.png",
      "title": "Белый керамогранит 532",
      "razm": "Размер: любой",
      "cenaold": "1000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Керамогранитная плитка 532."
    },
    {
      "img": "./assets/imgraboty/odp1.png",
      "img1": "./assets/imgraboty/odp2.png",
      "img2": "./assets/imgraboty/odp3.png",
      "img3": "./assets/imgraboty/odp1.png",
      "title": "Одиночные памятники из гранита",
      "razm": "Большой ассортимент",
      "cenaold": "2000 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Одинарный или вертикальный памятник – это надгробие, в виде стелы с тумбой и цветником, которое устанавливается на месте погребения одного человека."
    },
  ];
}

