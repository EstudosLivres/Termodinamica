<script type="text/javascript">            
    var entrada1, entrada2, volume1, volume2, energia1, energia2, energia3, entalpia1, entalpia2, entalpia3, entropia1, entropia2, entropia3;
    var entradas = new Array(entrada1, entrada2), volumes = new Array(volume1, volume2), energias = new Array(energia1, energia2, energia3),
        entalpias = new Array(entalpia1, entalpia2, entalpia3), entropias = new Array(entropia1, entropia2, entropia3);

    var campos_tooltip = new Array();
</script>

<script type="text/javascript">

    function carregaInputs(){
        entrada1 = $("#entrada1").val(), entrada2 = $("#entrada2").val(), volume1 = $("#volume1").val(), volume2 = $("#volume2").val(),
        energia1 = $("#energia1").val(), energia2 = $("#energia2").val(), energia3 = $("#energia3").val(), entalpia1 = $("#entalpia1").val(),
        entalpia2 = $("#entalpia2").val(), entalpia3 = $("#entalpia3").val(), entropia1 = $("#entropia1").val(), entropia2 = $("#entropia2").val(),
        entropia3 = $("#entropia3").val();
    }

    function inputsValidos(){
        carregaInputs();
        ehValido = false;

        if( (entrada1 != "" && entrada2 != "") || (volume1 != "" && volume2 != "") || (energia1 != "" && energia2 != "" && energia3 != "") || (entalpia1 != "" && entalpia2 != "" && entalpia3 != "")
             || (entropia1 != "" && entropia2 != "" && entropia3 != "") )
             ehValido = true;

        return ehValido;
    }//fim da validação dos inputs
    
    //Retorna uma array com os itens que devem levar tooltip na testa
    function validaArray(array){
        
    }//fim do valida array

    $("#btn_verificar").click(function() {
        alert(inputsValidos());
    });
    
</script>