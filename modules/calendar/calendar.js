function genCalendar() {
  let D1 = new Date();
  let D1last = new Date(D1.getFullYear(), D1.getMonth() + 1, 0).getDate(); // последний день месяца
  let D1Nlast = new Date(D1.getFullYear(), D1.getMonth(), D1last).getDay(); // день недели последнего дня месяца
  let D1Nfirst = new Date(D1.getFullYear(), D1.getMonth(), 1).getDay(); // день недели первого дня месяца
  let month = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
  let res = "<div class=\"header\">" + month[D1.getMonth()] + " " + D1.getFullYear() + "</div>";
  res += "<div class=\"field\"><div class=\"weeks\"><div>Пн</div><div>Вт</div><div>Ср</div><div>Чт</div><div>Пт</div><div>Сб</div><div>Вс</div></div>";
  res += "<div class=\"days\"><div class=\"week\">";
  let g = 7;
  if (D1Nfirst !== 0) {
    for (let  i = 1; i < D1Nfirst; i++) res += '<div></div>';
  }else{
    for (let  i = 0; i < 6; i++) res += '<div></div>';
  }
  for(let  i = 1; i <= D1last; i++) {
    if (i == D1.getDate()) {
      res += '<div class="now">' + i + "</div>";
    } else {
      res += '<div>' + i + "</div>";
    }
	g--;
    if (new Date(D1.getFullYear(),D1.getMonth(),i).getDay() == 0) {
      res += '</div><div class="week">';
	  g = 7;
    }
  }
  for(let j = 0; j < g; j++){
    res+="<div></div>";
  }
  res+="</div></div>";
  document.querySelector('.calendar').innerHTML = res;
}