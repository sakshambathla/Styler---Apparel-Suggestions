<html>
<style>
body  {
    background-image: url("action_page_men.jpg");
    background-color: #cccccc;
}
</style>
<body>
<center>
<h2>Welcome</h2> 
<?php
if($_POST["Waist"] > "39" or $_POST["Hips"] > 48 or $_POST["Chest"] > 50 or ($_POST["Chest"] >= 44 and $_POST["Chest"] <= 50 and $_POST["Waist"] >=36 and $_POST["Waist"] <=39))
{
        echo "Your Body Shape is Heavy";?><br><br>
<img src="heavy.jpg"  height="300" width="200"><br><br><br><br><br><br><br>
<h2> Tops for you</h2>
<a target="_blank" href="http://www.amazon.in/s/ref=sr_nr_p_n_size_browse-vebi_12?fst=as%3Aoff&rh=k%3Ashirts%2Cn%3A1571271031%2Cn%3A%211571272031%2Cn%3A1968024031%2Cn%3A1968093031%2Cp_n_size_browse-vebin%3A1975397031%7C1975398031%7C1975399031%7C1975400031&bbn=1968093031&keywords=shirts&ie=UTF8&qid=1492325057&rnid=1974882031">
    <img src="heavyshirttop.jpg"  height="300" width="200"><br><br>
</a>
<b> 1.) Regular fit Shirt<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss_1?url=search-alias%3Dapparel&field-keywords=suits+for+men&rh=n%3A1571271031%2Ck%3Asuits+for+men">
    <img src="heavysuittop.jpg"  height="300" width="200"><br><br>
</a>
<b> 2.) Formal regular fitting Suit.<br><br><br><br>
<a target="_blank" href="http://www.myntra.com/denim-dungarees?f=gender%3Amen">
    <img src="heavytop.jpg"  height="300" width="200"><br><br>
</a>
<b> 3.) Overall denim Jumpsuits<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.amazon.in/s/ref=sr_nr_n_0?fst=as%3Aoff&rh=n%3A1571271031%2Ck%3Afitted+jeans%2Cn%3A%211571272031%2Cn%3A1968024031&bbn=1571272031&keywords=fitted+jeans&ie=UTF8&qid=1492325849&rnid=1571272031">
    <img src="heavyfitjeansbottom.jpeg"  height="300" width="200"><br><br>
</a>
<b> 1.) Narrow bottom jeans.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=sr_nr_p_n_size_browse-vebi_12?fst=as%3Aoff&rh=n%3A1571271031%2Cn%3A%211571272031%2Cn%3A1968024031%2Ck%3Ashort+trouser%2Cp_n_size_browse-vebin%3A1975397031%7C1975398031%7C1975399031%7C1975400031&bbn=1968024031&keywords=short+trouser&ie=UTF8&qid=1492326184&rnid=1974882031">
    <img src="heavyshorttrouserbottom.jpg"  height="300" width="200"><br><br>
</a>
<b> 2.) Short Trouser.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=sr_nr_p_n_size_browse-vebi_10?fst=as%3Aoff&rh=n%3A1571271031%2Cn%3A%211571272031%2Cn%3A1968024031%2Ck%3Astraight+leg+pants%2Cp_n_material_browse%3A1974776031%2Cp_n_size_browse-vebin%3A1975397031%7C1975398031&bbn=1968024031&keywords=straight+leg+pants&ie=UTF8&qid=1492326265&rnid=1974882031">
    <img src="heavystraightlegbottom.jpg"  height="300" width="200"><br><br>
</a>
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
<a target="_blank" href="http://www.amazon.in/s/ref=a9_sc_1?rh=i%3Aapparel%2Ck%3Acorduroy+shirt&keywords=corduroy+shirt&ie=UTF8&qid=1492306600">
    <img src="skinnycorduorytop.jpg"  height="300" width="200"><br><br>
</a>
<b> 1.) Corduory Shirt.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Dapparel&field-keywords=denim+shirt&rh=n%3A1571271031%2Ck%3Adenim+shirt">
    <img src="skinnydenimtop.jpg"  height="300" width="200"><br><br>
</a>
<b> 2.) Denim Shirt.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss?url=node%3D1968024031&field-keywords=funnel+neck+&rh=n%3A1571271031%2Cn%3A!1571272031%2Cn%3A1968024031%2Ck%3Afunnel+neck+">
    <img src="skinnyfunnelnecktop.jpg"  height="300" width="200"><br><br>
</a>
<b> 3.) Turtlenecks.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_ss_i_1_6?url=search-alias%3Dapparel&field-keywords=tweed+blazers+for+men&sprefix=tweed+%2Caps%2C320&crid=2CSHTT9A9ZRP7&rh=n%3A1571271031%2Ck%3Atweed+blazers+for+men">
    <img src="skinnytweedtop.jpg" height="300" width="200" ><br><br>
</a>
<b> 4.) Two button tweed Blazer.<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Dapparel&field-keywords=camel+trouser&rh=n%3A1571271031%2Ck%3Acamel+trouser">
    <img src="skinnycameltrouserbottom.jpeg"  height="300" width="200"><br><br>
</a>
<b> 1.) Camel Trouser.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_noss_2?url=search-alias%3Dapparel&field-keywords=distressed+jeans+&sprefix=distresse%2Caps%2C307&crid=2VM7G80RRH5I6&rh=n%3A1571271031%2Ck%3Adistressed+jeans">
    <img src="skinnydistressed denimbottoms.jpg"  height="300" width="200"><br><br>
</a>
<b> 2.) Distressed Denim.<br><br><br><br>
<a target="_blank" href="http://www.amazon.in/s/ref=nb_sb_ss_i_1_14?url=search-alias%3Dapparel&field-keywords=narrow+bottom+jeans+for+men&sprefix=narrow+bottom+%2Caps%2C301&crid=3N9PSK742Z8JN&rh=n%3A1571271031%2Ck%3Anarrow+bottom+jeans+for+men">
    <img src="skinnyselevedgebottom.jpg" height="300" width="200"><br><br>
</a>
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
<a href="http://www.amazon.in/s/ref=nb_sb_ss_rsis_1_5?url=search-alias%3Dapparel&field-keywords=athletic+fit+tshirt&sprefix=athle%2Caps%2C303&rh=n%3A1571271031%2Ck%3Aathletic+fit+tshirt">
    <img src="muscularathleticfittop.jpg"  height="300" width="200"><br><br>
</a>
<b> 1.) Athletic Fit Tshirt<br><br><br><br>
<a href="http://www.myntra.com/slim-fit-shirts">
    <img src="muscularperfectfittop.jpg"  height="300" width="200"><br><br>
</a>
<b> 2.) Tight Fit Shirt<br><br><br><br>
<a href="http://www.myntra.com/waistcoat">
    <img src="muscularsuittop.jpg"  height="300" width="200"><br><br>
</a>
<b> 3.) 3 Button regular fit waistcoat<br><br><br><br>
<br><br><br><br><br>
<h2> Bottoms for you </h2>
<a href="http://www.amazon.in/s/ref=sr_ex_n_1?rh=n%3A1571271031%2Cn%3A%211571272031%2Cn%3A1968024031%2Ck%3Astraight+jeans&bbn=1968024031&keywords=straight+jeans&ie=UTF8&qid=1492327485">
    <img src="muscularstraightlegbottoms.jpg"  height="300" width="200"><br><br>
</a>
<b> 1.) Straight Leg Jeans.<br><br><br><br>
<a href=http://www.amazon.in/s/ref=sr_nr_n_1?fst=as%3Aoff&rh=n%3A1571271031%2Cn%3A%211571272031%2Cn%3A1968024031%2Ck%3Ashrink+to+fit+pants%2Cn%3A1968125031&bbn=1968024031&keywords=shrink+to+fit+pants&ie=UTF8&qid=1492327562&rnid=1968024031">
    <img src="muscularshrinktofitbottom.jpg"  height="300" width="200"><br><br>
</a>
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
