<script type="text/javascript">
    var entrada1, entrada2, volume1, volume2, energia1, energia2, energia3, entalpia1, entalpia2, entalpia3, entropia1, entropia2, entropia3;
    var entradas = new Array(entrada1, entrada2), volumes = new Array(volume1, volume2), energias = new Array(energia1, energia2, energia3),
            entalpias = new Array(entalpia1, entalpia2, entalpia3), entropias = new Array(entropia1, entropia2, entropia3);

    var campos_tooltip = new Array();
    
    var time_animate = 1500;
    
    $(document).ready(function (){
        $("#alerta_erro").slideToggle(500); //faz o alerta sumir
    });
</script>