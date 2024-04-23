const template = document.querySelector('.cards-wrapperm');
const cardm = document.querySelector('.cardm');

pamDvoin().forEach(art => {
  const artElem = document.importNode(cardm, true);
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

//Памятники двойные в меню двойные памятники
function pamDvoin() {
  return [
    {
      "img": "./assets/imgdvoyn/B-15.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник B-15",
      "razm": "Размер: любой",
      "cenaold": "1800 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgdvoyn/B-39.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник B-39",
      "razm": "Размер: любой",
      "cenaold": "1800 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
      "img": "./assets/imgdvoyn/B-06.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятник B-06",
      "razm": "Размер: любой",
      "cenaold": "1800 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
    {
        "img": "./assets/imgdvoyn/B-05.png",
        "img1": "",
        "img2": "",
        "img3": "",
        "title": "Памятник B-05",
        "razm": "Размер: любой",
        "cenaold": "От 1800 руб.",
        "cena": "Цена по запросу",
        "catalog-item__list": "Входит в комплект:	стела (как на образце), подставка, цветник, портрет, надпись (фио, даты), гарантия"
      },
    {
        "img": "./assets/imgdvoyn/Mp-10.png",
        "img1": "",
        "img2": "",
        "img3": "",
        "title": "Памятник Mp-10",
        "razm": "Размер: любой",
        "cenaold": "От 1800 руб.",
        "cena": "Цена по запросу",
        "catalog-item__list": "Памятники, выполненные из натурального камня (гранита или мрамора) стоят довольно дорого. В качестве альтернативы можно купить памятники из гранитно-мраморной крошки. В них используется смесь бетона и гранитной или мраморной крошки. Преимуществом указанного материала является невысокая цена. В то же время срок эксплуатации таких памятников значительно ниже, чем у гранитных."
      },
    {
      "img": "./assets/imgdvoyn/gmk.png",
      "img1": "",
      "img2": "",
      "img3": "",
      "title": "Памятники из гранита и мраморно-гранитной крошки",
      "razm": "Размер: любой",
      "cenaold": "1800 руб.",
      "cena": "Цена по запросу",
      "catalog-item__list": "Материал происхождения: гранит(Карелия, Россия). Под заказ памятник может быть выполнен из цветного гранита."
    },
  ];
}

