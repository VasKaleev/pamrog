const template = document.querySelector('.cards-wrapperg');
const cardg = document.querySelector('.cardg');


pamOdin().forEach(art => {  
  const artElem = document.importNode(cardg, true);
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

//Памятники одинарные в меню одинарные памятники
function pamOdin() {
  return [
    {
      "img": "./assets/imgodin/C-20.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник С-20",
      "razm": "Размер: любой",
      "cenaold": "1330 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgodin/E-27.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник E-27",
      "razm": "Размер: любой",
      "cenaold": "1350 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgodin/A-32.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник A-32",
      "razm": "Размер: любой",
      "cenaold": "1250 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgodin/A-15.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник A-15",
      "razm": "Размер: любой",
      "cenaold": "1100 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgodin/volna.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятники из мраморной крошки",
      "razm": "Большой ассортимент",
      "cenaold": "От 400 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Входит в комплект:	стела (как на образце), подставка, цветник, портрет, надпись (фио, даты), гарантия"
    },
  ];
}

