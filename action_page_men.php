<html>
<body>
<center>
<h2>Welcome</h2> 
<?php
if($_POST["Waist"] > "39" or $_POST["Hips"] > 48 or $_POST["Chest"] > 50 or ($_POST["Chest"] >= 44 and $_POST["Chest"] <= 50 and $_POST["Waist"] >=36 and $_POST["Waist"] <=39))
{
        echo "Your Body Shape is Heavy";?><br><br>
<img src="heavy.jpg"  height="300" width="200"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<img src="heavyshirttop.jpg"  height="300" width="200"><br><br>
<b> 1.) Regular fit Shirt<br><br><br><br>
<img src="heavysuittop.jpg"  height="300" width="200"><br><br>
<b> 2.) Formal regular fitting Suit.<br><br><br><br>
<img src="heavytop.jpg"  height="300" width="200"><br><br>
<b> 3.) Overall denim Jumpsuits<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="heavyfitjeansbottom.jpeg"  height="300" width="200"><br><br>
<b> 1.) Narrow bottom jeans.<br><br><br><br>
<img src="heavyshorttrouserbottom.jpg"  height="300" width="200"><br><br>
<b> 2.) Short Trouser.<br><br><br><br>
<img src="heavystraightlegbottom.jpg"  height="300" width="200"><br><br>
<b> 3.) Lounge pants.<br><br><br><br>

<?php
}
else if($_POST["Chest"] < 40 and $_POST["Waist"] <30)
{
        echo "Your Body Shape is Skinny";
?>
<br><br>
<img src="skinny.jpg"  height="300" width="200"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<img src="skinnycorduorytop.jpg"  height="300" width="200"><br><br>
<b> 1.) Corduory Shirt.<br><br><br><br>
<img src="skinnydenimtop.jpg"  height="300" width="200"><br><br>
<b> 2.) Denim Shirt.<br><br><br><br>
<img src="skinnyfunnelnecktop.jpg"  height="300" width="200"><br><br>
<b> 3.) Turtlenecks.<br><br><br><br>
<img src="skinnytweedtop.jpg" height="300" width="200" ><br><br>
<b> 4.) Two button tweed Blazer.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="skinnycameltrouserbottom.jpeg"  height="300" width="200"><br><br>
<b> 1.) Camel Trouser.<br><br><br><br>
<img src="skinnydistressed denimbottoms.jpg"  height="300" width="200"><br><br>
<b> 2.) Distressed Denim.<br><br><br><br>
<img src="skinnyselevedgebottom.jpg" height="300" width="200"><br><br>
<b> 3.) Selvedge Jeans.<br><br><br><br>

<?php
}
else if($_POST["Chest"] > 40 and $_POST["Waist"] >=30 and $_POST["Waist"] <36)
{
        echo "Your Body Shape is Muscular";
?>
<br><br>
<img src="muscular.jpg"  height="300" width="200"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<img src="muscularathleticfittop.jpg"  height="300" width="200"><br><br>
<b> 1.) Athletic Fit Tshirt<br><br><br><br>
<img src="muscularperfectfittop.jpg"  height="300" width="200"><br><br>
<b> 2.) Tight Fit Shirt<br><br><br><br>
<img src="muscularsuittop.jpg"  height="300" width="200"><br><br>
<b> 3.) 3 Button regular fit waistcoat<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="muscularstraightlegbottoms.jpg"  height="300" width="200"><br><br>
<b> 1.) Straight Leg Jeans.<br><br><br><br>
<img src="muscularshrinktofitbottom.jpg"  height="300" width="200"><br><br>
<b> 2.) Shrink to fit bottoms.<br><br><br><br>

<?php
}

else 
{
	echo "A small percentage of men bodies dont fall into any of the major body categories. If in doubt, you can always choose regular fit dark coloured tshirts with denim jeans.";
?>

<?php
}

?>
</body>
</html>
