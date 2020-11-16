<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$pw = $_POST["password"];
$q1 = $_POST["qpen"];
$q2 = $_POST["qpencil"];
$q3 = $_POST["qeraser"];
$ship = $_POST["shipping"];
$a = $q1*3;
$b = $q2*2;
$c = $q3*1;
$d = $a+$b+$c;
$result = 0;
if($_POST["shipping"]=="Free 7 day")
{
  $result = 0;
}if($_POST["shipping"]=="$50.00 over night")
{
  $result = 50;
}if($_POST["shipping"]=="$5.00 three day")
{
  $result = 3;
}

echo "<body></body>";
echo "Thank you for the purchase!!<br>";
echo "Your password is: ".$pw."<br><br>";
echo "<b>Recipt:</b><br>";
echo "<table>
  <tr>
  <td> </td>
  <td><b>Quantity</b></td>
  <td><b>Cost Per Item</b></td>
  <td><b>Subtotal</b></td>
  </tr>
  <tr>
  <td><b>Item 1</b></td>
  <td>$q1</td>
  <td>$3.00</td>
  <td>$a</td>
  </tr>
  <tr>
  <td><b>Item 2</b></td>
  <td>$q2</td>
  <td>$2.00</td>
  <td>$b</td>
  </tr>
  <tr>
  <td><b>Item 3</b></td>
  <td>$q3</td>
  <td>$1.00</td>
  <td>$c</td>
  </tr>
  <tr>
  <td><b>Shipping</b></td>
  <td>$ship</td>
  <td> </td>
  <td>$result</td>
  </tr>
  <tr>
  <td><b>Total</b></td>
  <td><b>Cost</b></td>
  <td> </td>
  <td>$d</td>
  </tr>
</table>"



?>
