<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="zscript.js"></script>
</head>
<body>
<h1>jQuery<h1>
<div class="fun"></div>
<style>
.fun { height:50px; width:50px; background-color: yellow; border-radius: 50% }
</style>
<script type="text/javascript">
$('.fun').click(function(){
    $(this).fadeOut('slow');
});
</script>
</body>
</html>