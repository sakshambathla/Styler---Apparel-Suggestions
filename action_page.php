<html>
<body>
<center>
<h1><b>Welcome</b></h1> 
<?php
if($_POST["Waist"] > "36" or $_POST["Bust"] > "44" or $_POST["Hips"] > 44)
{
	echo "Your Body Shape is Heavy";	
} 
else if($_POST["Bust"] <= $_POST["Waist"]+2 and $_POST["Bust"] >= $_POST["Waist"]-2 )
{
	echo "Your Body Shape is Straight";
?>
<br> 
<br>

<img src="womanStraight.jpg"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<img src="img1.jpg"><br><br>
<b> 1.) Tops with belted waists.<br><br><br><br>
<img src="img2.jpg"><br><br>
<b> 2.) Off the shoulder, boat-neck tops, wide V or U necks.<br><br><br><br>
<img src="img3.jpg"><br><br>
<b> 3.) Tops with belted waists.<br><br><br><br>
<img src="img4.jpg"><br><br>
<b> 4.) Structured shoulders, princess or flutter sleeves.<br><br><br><br>
<img src="img5.jpg"><br><br>
<b> 5.) Embellishments around the bust and shoulders.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="img21.jpg"><br><br>
<b> 1.) Cargo or safari pants with pronounced hip and rear pockets.<br><br><br><br>
<img src="img22.jpg"><br><br>
<b> 2.) Details such as whiskering, embellished pockets & flap pockets.<br><br><br><br>
<img src="img23.jpg"><br><br>
<b> 3.) Full, tiered or bubble skirts.<br><br><br><br>
<img src="img24.jpg"><br><br>
<b> 4.) Mid to low-rise waists with wide waistband<br><br><br><br>
    
<?php
}
else if($_POST["Bust"] > $_POST["Hips"]+3)
{
	echo "Your Body Shape is Apple/ Inverted Triangular";
?>
<br> 
	<img src="apple.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<img src="img11.jpg"><br><br>
<b> 1.) Narrow v-necks.
<br><br><br><br>
<img src="img12.jpg"><br><br>
<b> 2.) Tops with banding or nipping at the waist.<br><br><br><br>
<img src="img13.jpg"><br><br>
<b> 3.) Wrap-style tops.
<br><br><br><br>
<img src="img14.jpg"><br><br>
<b> 4.) Tailored shirts and jackets.
<br><br><br><br>
<img src="img15.jpg"><br><br>
<b> 5.) Dark colored tops.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="img31.jpg"><br><br>
<b> 1.) Cargo or safari pants with pronounced hip and rear pockets.<br><br><br><br>
<img src="img32.jpg"><br><br>
<b> 2.) Boot cut or wide legs.<br><br><br><br>
<img src="img34.jpg"><br><br>
<b> 3.) Full or A-line skirts.
<br><br><br><br>
r>

<?php
}
else if($_POST["Hips"] > $_POST["Bust"]+3 )
{
	echo "Your Body shape is Pear";?><br><br><br><br><br>
	<img src="womanPear.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<img src="img61.jpg"><br><br>
<b> 1.) Billowy tops<br><br><br><br>
<img src="img62.jpg"><br><br>
<b> 2.) Shirts with a fitted waist<br><br><br><br>
<img src="img63.jpg"><br><br>
<b> 3.) Dress shirts with structured or princess shoulders and a darted waist.<br><br><br><br>
<img src="img64.jpg"><br><br>
<b> 4.) Wrap shirts <br><br><br><br>
<img src="img65.jpg"><br><br>
<b> 5.) Jackets with full or structured shoulders and a nipped-in waist in hip-length. <br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="img71.jpg"><br><br>
<b> 1.) A-line skirts<br><br><br><br>
<img src="img72.jpg"><br><br>
<b> 2.) Lightly gathered skirts<br><br><br><br>
<img src="img73.jpg"><br><br>
<b> 3.) Simple, dark colored slacks<br><br><br><br>

<?php
}
else
{
	echo "Your Body Shape is HourGlass";
?>
<br>
	<img src="hourglass.jpg"><br><br><br><br><br>
	<h2> Tops for you</h2>
<img src="img41.jpg"><br><br>
<b> 1.) Tops with belted waists.<br><br><br><br>
<img src="img42.jpg"><br><br>
<b> 2.) Tops with banding or nipping at the waist.<br><br><br><br>
<img src="img43.jpg"><br><br>
<b> 3.) Form-fitting tops.<br><br><br><br>
<img src="img44.jpg"><br><br>
<b> 4.) Wrap-style tops.<br><br><br><br>
<img src="img45.jpg"><br><br>
<b> 5.) Tailored shirts and jackets.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<img src="img51.jpg"><br><br>
<b> 1.) High-waisted pants and pencil skirts.<br><br><br><br>
<img src="img52.jpg"><br><br>
<b> 2.) Skinny jeans and pants paired with a balanced top.<br><br><br><br>
<img src="img53.jpg"><br><br>
<b> 3.) Boot cut & straight leg pants.
<br><br><br><br>

<?php
}


?>
</center>
</body>
</html>	
