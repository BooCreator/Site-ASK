// show elem
function Show(elem) {
  $(elem).css("z-index", 999);
  $(elem).css("opacity", 1);
}

// hide elem
function Hide(elem) {
  $(elem).css("z-index", -1);
  $(elem).css("opacity", 0);
}