<link rel="stylesheet" href="public/css/bootstrap.min.css">
<style>
    body {
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .ocultar{
        display:none;
    }
</style>

<script type="text/javascript">
    function carregaInputs() {
        entrada1 = $("#entrada1").val(), entrada2 = $("#entrada2").val(), volume1 = $("#volume1").val(), volume2 = $("#volume2").val(),
                energia1 = $("#energia1").val(), energia2 = $("#energia2").val(), energia3 = $("#energia3").val(), entalpia1 = $("#entalpia1").val(),
                entalpia2 = $("#entalpia2").val(), entalpia3 = $("#entalpia3").val(), entropia1 = $("#entropia1").val(), entropia2 = $("#entropia2").val(),
                entropia3 = $("#entropia3").val();
    }

    function inputsValidos() {
        carregaInputs();
        ehValido = false;

        if ((entrada1 != "" && entrada2 != "") || (volume1 != "" && volume2 != "") || (energia1 != "" && energia2 != "" && energia3 != "") || (entalpia1 != "" && entalpia2 != "" && entalpia3 != "")
                || (entropia1 != "" && entropia2 != "" && entropia3 != ""))
            ehValido = true;

        return ehValido;
    }//fim da validação dos inputs

    //Retorna uma array com os itens que devem levar tooltip na testa
    function validaArray(array) {
        
    }//fim do valida array

    $("#btn_verificar").click(function() {
        alert(inputsValidos());
    });

</script>

<script type="text/javascript">
    $(".alert").alert();
</script>
<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="public/css/main.css">

<script src="public/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

