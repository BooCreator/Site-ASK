function _gen(elem) {
  let type = $(elem).attr("class");
  if (type != null && typeof type !== "undefined") {
    let src = $(elem).attr("src");
	if (src != null && typeof src !== "undefined") {
      let count = $(elem).attr("count");
      let title = $(elem).attr("title");
      let style = $(elem).attr("cols");
      if (count == null && typeof count === "undefined") { style = "1"; }
      if (title == null && typeof title === "undefined") { title = ""; }
      if (style == null && typeof style === "undefined") { style = ""; } else { style = "cols-" + style; }
	  
      var html = '<div class="' + type + '_data ' + style + '">';
      for(var i = 1; i <= count; i++){
        html+= '<img src="' + src.replace("#", i) + '" onclick="lightbox(\'' + title + '\', \'' + src.replace("#", i) + '\')" class="' + style + '">';
      }
      html+= '</div>';
      $(elem).html(html);
	}
  }
}

function generateNext(elem, type){
  elem = $(elem).next('.' + type);
  _gen(elem);
}

function generateAll(type){
  elems = $('.' + type);
  for(let i = 0; i < elems.length; i++)
    _gen(elems[i]);
}

