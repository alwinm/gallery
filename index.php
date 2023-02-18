<!DOCTYPE html>

<html>
<head>
<style type="text/css">
html {text-align: center;}
body {
width: 900px;	
background-color:black;
margin: 0 auto;
text-align: left;
}
p {color:white;
width:900px}
h1 {color:white;}
a {color:white;}
h3 {color:white;}
h7 {color:white;}

</style>
<title><?php echo $_SERVER['PHP_SELF'];?>
</title>


<script type="text/javascript">
function enlarge(x)
{
if (parseInt(x.style.height) != x.naturalHeight) {
x.style.width=x.naturalWidth+"px";
x.style.height=x.naturalHeight+"px";
x.style.cursor="-webkit-zoom-out";
} else {
x.style.height="240px"
x.style.width='auto'
x.style.cursor="-webkit-zoom-in";
}
}
</script>

</head>
<!--THIS BEGINS THE DISPLAYED TEXT,ETC. WHICH SHALL CHANGE-->
<hr>
<h1>Image Gallery</h1> <!--Page Name-->
<hr>
<h3>
<?php echo $_SERVER['PHP_SELF'];?>
</h3> <!--Section heading-->
<?php
$images = glob('./'.'*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$pdfs = glob('./'.'*.{pdf}', GLOB_BRACE);
$bottomdirs = glob('./*', GLOB_ONLYDIR);
if (count($bottomdirs) > 0) {
echo '<h3>Subdirectories</h3>';
}
foreach ($bottomdirs as $bottomdir) {
echo '<a href="'.$bottomdir.'">'.basename($bottomdir).'</a><br>';
}

echo '<br><h3>Images</h3>';

foreach ($images as $imaage) {
echo '<a href="'.$imaage.'" rel="lightbox[gallery]" data-title="'.basename($imaage).'">'.basename($imaage).'</a><br>';
echo '<img style="cursor:-webkit-zoom-in;" height="240" onclick="enlarge(this);" src="'.$imaage.'" title="'.basename($imaage).'"><br>';
echo '';
}

foreach ($pdfs as $imaage) {
echo '<a href="'.$imaage.'" rel="lightbox[gallery]" data-title="'.basename($imaage).'">'.basename($imaage).'</a><br>';
echo '<embed style="cursor:-webkit-zoom-in;"height="240" onclick="enlarge(this);" src="'.$imaage.'" title="'.basename($imaage).'"/><br>';
echo '';
}


?>
<br />
<a href="HOMEPAGE LINK"> Home </a>
<br />
<h7>
Alwin Mao
</h7>
</body>
</html>
