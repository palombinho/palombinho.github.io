<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoLimits</title>
</head>
<body>
<h1><img src="Logo.jpeg" class="logo" alt="" style="width:120px;height:120px;"> No Limits Events <img src="Logo.jpeg" alt="" class="logo" style="width:120px;height:120px;"></h1>
<div class="container">
<form action = "database1.php" method="post">
    <p>Verifica tramite numero prenotazione</p>
<input type="number" class="input-field" placeholder="Numero prenotazione" id="numero" required name="numero">
<button type="button" name="submit" class="btn-toolset" id="verifica1Btn">Verifica</button>
</form>
<br>
<p id ="response1"></p>

<form action = "database2.php" method="post">
<p>Verifica tramite nome e cognome</p>
<input type="text" class="input-field" placeholder="Nome prenotazione" id="nome" required name="nome">
<input type="text" class="input-field" placeholder="Cognome prenotazione" id="cognome" required name="cognome">
<button type="button" name="submit" class="btn-toolset" id="verifica2Btn">Verifica</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#verifica1Btn").on("click", function(){
            var numero = $("#numero").val();

            if (numero==""){
                $("#response1").html("<font color='red'>Inserire numero di prenotazione!</font>");
            }
            else {
                $.ajax(
                    {
                        url: 'database1.php',
                        method: 'POST',
                        data: {
                            numeroPHP: numero
                        },
                        success: function(response) {
                            $("#response1").html(response);

                            if(response.indexOf('success')>=0){
                                
                            }
                            


                        },
                        dataType:"text"
                    }
                )
            }
        })
    })

</script>
<p id ="response2"></p>
<script type="text/javascript">
    $(document).ready(function(){
        $("#verifica2Btn").on("click", function(){
            var nome = $("#nome").val();
            var cognome = $("#cognome").val();

            if (nome=="" || cognome==""){
                $("#response2").html("<font color='red'>Compila tutti i dati!</font>");
            }
            else {
                $.ajax(
                    {
                        url: 'database2.php',
                        method: 'POST',
                        data: {
                            nomePHP: nome,
                            cognomePHP: cognome
                        },
                        success: function(response) {
                            $("#response2").html(response);

                            if(response.indexOf('success')>=0){
                                
                            }


                        },
                        dataType:"text"
                    }
                )
            }
        })
    })

</script>
</body>
</html>