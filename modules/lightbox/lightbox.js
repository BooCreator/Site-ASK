// title - заголовок, src - путь для картинки
function lightbox(title, src){
  if (title != null && typeof title !== "undefined") {
    title = title.trim();
  }
  var html = "<img src='" + src + "'>";
  $('#lightbox .lightbox_title p').text(title);
  $('#lightbox .lightbox_content').html(html);
  Show($('#lightbox'));
}