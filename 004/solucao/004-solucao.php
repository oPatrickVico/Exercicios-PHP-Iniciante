<!DOCTYPE html>
<html>
  <body>
    <form method='POST'>
      <h2>Digite seu nome</h2>
      <input type="text" name="nome">
      <button type="submit">Enviar nome</button>
    </form>
  <?php
  $name = $_POST['nome'];
  echo "<h3> Olá $name </h3>";
  ?>
</body>
</html>