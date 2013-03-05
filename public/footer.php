            <hr>

            <footer>
                <p>Todos os direitos reservados &copy; UnB Gama 2013</p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="public/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="public/js/vendor/bootstrap.min.js"></script>

        <script src="public/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
                <!-- Validação dos campos -->
        <script type="text/javascript">
            var entrada1, entrada2, volume1, volume2, energia1, energia2, energia3, entalpia1, entalpia2, entalpia3, entropia1, entropia2, entropia3;
            
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
            
            $(document).ready(function() {
                carregaInputs();
                alert(inputsValidos());
            });
            
            $("#btn_verificar").click(function() {
                alert(inputsValidos());
            });
        </script>
        
    </body>
</html>
