
<HTML>
<BODY>
  <?php
  echo "Hello, ".$_POST['name']."! ";
  echo "Welcome to our restaurant.<br><br>";
  ?>


  <?php
  echo "You have chosen to eat: <b><br>";
  if (isset($_POST['sel1']))
  echo $_POST['sel1']. "<br>";
  if (isset($_POST['sel2']))
  echo $_POST['sel2']. "<br>";
  if (isset($_POST['sel3']))
  echo $_POST['sel3']. "<br>";
  if (isset($_POST['sel4']))
  echo $_POST['sel4']. "<br>";
  if (isset($_POST['sel5']))
  echo $_POST['sel5']. "<br>";
  if (isset($_POST['sel6']))
  echo $_POST['sel6']. "<br>";
  ?>

  <?php
  echo "<br></b>You have chosen to drink: <B>".$_POST['drink']."</B><br><br>";
  ?>

  <?php echo "You choose <b>".$_POST['Resp']."</b> as your dessert.<br>";?>
</BODY>
</HTML>
