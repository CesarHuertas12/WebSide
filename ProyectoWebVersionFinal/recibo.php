<?php
    session_start();
    $usuario = $_SESSION['email'];
    $numeroTarjeta = $_SESSION['numberCard'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Imprimir recibo</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	body{
		background-image: url("images/receiptbg.jpg");
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>
</head>
<body>

<!-- SCRIPT DE COBROS LÓGICA DE NEGOCIO-->
<script src="script/cobro.js"></script>

<div class="container py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 mx-auto">
            <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <pre><h2>Recibo de pago</h2></pre>
                        <pre><p id="p1"></p></pre>
                        <script>
	                        var date = new Date();
	                        document.getElementById("p1").innerHTML = date;
                            document.write ("<pre>" + "<h7>" +"\t" +"Lugar de reserva: "+ country + "</h7>" + "</pre>");
							document.write ("<pre>" + "<h7>" +"\t" +"Precio total: "+ totalMount + "</h7>" + "</pre>");
                            document.write ("<pre>" + "<h7>" +"\t" +"Id de compra: "+ Date.now() + "</h7>" + "</pre>");
						</script>
                            <?php
                            echo "<pre> <h7 align='right'>\tCorreo del usuario: $usuario </h7> </pre>";
                            echo "<pre> <h7 align='right'>\tNumero de cuenta utilizada: $numeroTarjeta </h7> </pre>";
                            ?>
                        
                    </div>

                        <div>
							<button id="btnPrint" type="submit" class="btn btn-sm btn-secondary " onclick="btnPrint.style.display = 'none'; window.print();   return false; ">
                                <i class=""></i>
                                <span id="payment-button-amount">Imprimir</span>
                                <span id="payment-button-sending" style="display:none;">Enviando…</span>
                            </button>
							
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>                                		