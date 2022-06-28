<script src="script.js"></script>
<link rel="stylesheet" href="style.css" type="text/css">

<form action="" method="POST" > 
    <p>
<label for="név">Név:</label>
<input type="text" name="név" id="név" required="required">
</p>
<p>
<label for="email">Email cím:</label>
<input type="email" name="email" id="email" required="required">
</p>

<select name="szak" id="szak">
<option value="0">Választható szakok</option>
<option value="1">Szoftverfejlesztő</option>
<option value="2">Rendszergazda</option>
<option value="3">Grafikus</option>

</select>
<input type="button" name="Jelentkezés" value="Jelentkezés" onclick="jelentkezés()">


</form>