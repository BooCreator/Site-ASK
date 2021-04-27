<!-- пассбокс -->
  <div id="passbox">
    <form method="post">
      <input type="password" name="pass">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-ask-2" onclick="check_password('templates/ask_mogilev3.0/modules/passbox/password.php')">Отправить</button>
        <button type="button" class="btn btn-ask-2" onclick="Hide($('#passbox'))">X</button>
      </div>
    </form>
  </div>
<!-- конец пассбокса -->