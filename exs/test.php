<?php 
$todos = [
 [
  "id" => 1,
  "title" => "Купить столовые приборы",
  "date" => "03.04.2020",
  "status" => "Выполнено"
 ],
 [
  "id" => 2,
  "title" => "Выбросить мусор",
  "date" => "05.04.2020",
  "status" => "Ожидается"
 ],
 [
  "id" => 3,
  "title" => "Помыть машину",
  "date" => "10.04.2020",
  "status" => "Ожидается"
 ]
];
$l = 0;
$a = 0;
echo "<h1 style='color: red'>" . "С помощью while";
while($l <  count($todos))  {
	echo '<h2 style="color: red">' . $todos[$l]['id'] . "</h2>";
	echo '<h1 style="color: red">' . $todos[$l]['title'] . "</h1>";
	echo '<h3 style="color: red">' . $todos[$l]['date'] . "</h3>";
	echo '<h3 style="color: red">' . $todos[$l]['status'] . "</h3>";
$l++;
};
echo "<h1 style='color: yellow'>" . "С помощью for";
for ($i=0; $i < count($todos); $i++) { 
	echo '<h2 style="color: yellow">' . $todos[$i]['id'] . "</h2>";
	echo '<h1 style="color: yellow">' . $todos[$i]['title'] . "</h1>";
	echo '<h3 style="color: yellow">' . $todos[$i]['date'] . "</h3>";
	echo '<h3 style="color: yellow">' . $todos[$i]['status'] . "</h3>";
};
echo "<h1 style='color: green'>" . "С помощью foreach";
foreach ($todos as $todo) {

	echo '<h2 style="color: green">' . $todos[$a]['id'] . "</h2>";
	echo '<h1 style="color: green">' . $todos[$a]['title'] . "</h1>";
	echo '<h3 style="color: green">' . $todos[$a]['date'] . "</h3>";
	echo '<h3 style="color: green">' . $todos[$a]['status'] . "</h3>";
	$a++;
};
?>
<?php 
function discriminant($a = 0, $b = 0, $c = 0) {
	$dis = $b**2-4*$a*$c;
	if($dis < 0){
		echo "<h2>" . "Корней нет!";
	};
	if($dis === 0){
		echo"<h2>" . "Один  корень: " . $x = -$b / (2 * $a);
	};
	if($dis > 0) {
	$x1 = (-$b + sqrt($dis)) / (2 * $a);
	$x2 = (-$b - sqrt($dis)) / (2 * $a);
		echo "<h2>" . "Дискриминант: " . $dis . "</h2>";
		echo "<h2>" . "Первый корень: " . $x1 . "</h2>";
		echo "<h2>" . "Второй корень: " . $x2 . "</h2>";
	};
};
discriminant(1, 4, 432);

 ?>
