function toArray(tags) {
  var pos = 0;
  var tmp = 0;
  var arr = [];
  while (pos < tags.length) {
    pos = tags.indexOf(',', pos + 1);
    if (pos === -1) { pos = tags.length; }
    arr.push(tags.substr(tmp, pos - tmp));
    tmp = pos + 1;
  }
  return arr;
}

function applyFilter(classes, dest) {
  var css = "." + classes + " input[type=\"text\"]";
  var elems = document.querySelectorAll(css);
  var value = elems[0].getAttribute("value");
  css = ".group input[type=\"radio\"]";
  elems = document.querySelectorAll(css);
  var type = "0";
  for (var i = 0; i < elems.length; i++) {
    if(elems[i].checked){
      type = elems[i].value;
      i = elems.length;
    }
  }
  _applyFilter(dest, value.substring(0, value.length - 1), type);
}

function _applyFilter(classes, tags, type){
  var arr = toArray(tags);
  var css = "." + classes + " ." + classes + "_a ";
  var elems = document.querySelectorAll(css);
  for(var i = 0 ; i < elems.length; i++) {
    var bool = false;
  if(tags.length != 0){
    if(type == "0") {
      for(var j = 0; j < arr.length; j++){
        if(elems[i].getAttribute("tags").indexOf(arr[j]) != -1){
          bool = true;
        }
      }
    } else {
      bool = true;
      for(var j = 0; j < arr.length; j++){
        if(elems[i].getAttribute("tags").indexOf(arr[j]) == -1){
          bool = false;
        }
      }
    }
  } else {
    bool = true;
  }
    elems[i].style.display = (bool) ? "inline" : "none";
  }
}

function addFilter(elem, classes, tag) {
  var css = "." + classes + " input[type=\"text\"]";
  elems = document.querySelectorAll(css);
  var value = elems[0].getAttribute("value");
  if(elem.classList.contains("filter_on") == false){
    value += tag + ",";
    elem.classList.add('filter_on');
  } else {
    value = value.replace(tag + ",","");
    elem.classList.remove("filter_on");
  }
  elems[0].setAttribute("value", value);
}

function hide(elem, dest, add) {
  var css = "." + dest;
  var elems = document.querySelectorAll(css);
  var source = "";
  if(add !== undefined) {
    source = add;
  }
  if(elems[0].style.display == "none"){
    elems[0].style.display = "block";
    elem.setAttribute("value", "Скрыть " + source);
  } else {
    elems[0].style.display = "none";
    elem.setAttribute("value", "Показать " + source);
  }
}