<?php

include("conexion.php");

if(!isset($_GET['id'])){
    die("Producto no encontrado");
}

$id = $_GET['id'];

$consulta = mysqli_query($conexion,
"SELECT * FROM productos WHERE id='$id'");

$producto = mysqli_fetch_assoc($consulta);

$total = $producto['precio'] * $producto['cantidad'];

$mensaje = "";

if(isset($_POST['pagar'])){
    $mensaje = "Pago realizado correctamente ✅";
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Pasarela de Pago</title>

<link rel="stylesheet" href="estilos.css">

</head>

<body>

<h1>Pasarela de Pago</h1>

<form method="POST">

<label>Producto</label>

<input type="text"
value="<?php echo $producto['nombre']; ?>"
readonly>

<label>Total a pagar</label>

<input type="text"
value="$<?php echo $total; ?>"
readonly>

<label>Método de pago</label>

<select id="metodo" onchange="mostrarMetodo()">

<option value="" disabled selected>
Seleccione un método de pago
</option>

<option value="credito">
Tarjeta de crédito
</option>

<option value="debito">
Tarjeta de débito
</option>

<option value="transferencia">
Transferencia bancaria
</option>

<option value="paypal">
PayPal
</option>

</select>

<!-- TARJETA CREDITO -->

<div id="credito" style="display:none;">

<input type="text"
placeholder="Número de tarjeta">

<input type="text"
placeholder="CVV">

</div>

<!-- TARJETA DEBITO -->

<div id="debito" style="display:none;">

<input type="text"
placeholder="Número de tarjeta">

<input type="text"
placeholder="Banco">

</div>

<!-- TRANSFERENCIA -->

<div id="transferencia" style="display:none;">

<input type="text"
placeholder="Banco">

<input type="text"
placeholder="Número de referencia">

</div>

<!-- PAYPAL -->

<div id="paypal" style="display:none; margin-top:20px;">

<h3 style="
text-align:center;
color:#0070ba;
margin-bottom:15px;
">

PayPal

</h3>

<p style="
text-align:center;
margin-bottom:15px;
color:gray;
">

Serás redirigido a PayPal para completar el pago

</p>

<a class="pagar"
href="https://www.paypal.com/signin"
target="_blank"
style="
display:block;
text-align:center;
padding:14px;
background:#0070ba;
border-radius:12px;
color:white;
font-weight:bold;
">

Ir a PayPal

</a>

</div>

<button type="submit" name="pagar">

Confirmar Pago

</button>

</form>

<?php

if($mensaje != ""){

echo "<h2>$mensaje</h2>";

}

?>

<script>

function mostrarMetodo(){

    let metodo =
    document.getElementById("metodo").value;

    document.getElementById("credito").style.display = "none";
    document.getElementById("debito").style.display = "none";
    document.getElementById("transferencia").style.display = "none";
    document.getElementById("paypal").style.display = "none";

    if(metodo != ""){
        document.getElementById(metodo).style.display = "block";
    }

}

</script>

</body>
</html>