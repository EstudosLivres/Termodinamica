<?php include_once "public/header.php"; ?>
				
				<form action="#" method="post" name="Formulario Termodinamica" class="span12">
					<fieldset>
						<legend>Efetue sua consulta</legend>
						<div class="alert alert-block alert-error fade in">
							<button class="close" data-dismiss="alert" type="button">×</button>
							<h4 class="alert-heading">Ops! Importante:</h4>
							<p>Informe pelo menos 2 parâmetros</p>
						</div>
						<label>Entradas</label>
						<div class="input-prepend">
						  <span class="add-on">Temperatura</span>
						  <input type="number" name="quantity" min="1" max="1300" class="input-xlarge" id="entrada1" placeholder="°">
						</div>
						
						<div class="input-prepend">
						  <span class="add-on">Pressão</span>
						  <input class="input-xlarge" id="entrada2" type="text" placeholder="Psat kPa">
						</div>
						
						<br />
						<hr />
						
						<label>Volume Específico</label>
						<div class="input-prepend">
						  <span class="add-on">Líquido</span>
						  <input class="input-xlarge" id="volume1" type="text" placeholder="m³/kg">
						</div>
						
						<div class="input-prepend btn-group">
						  <span class="add-on">Vapor</span>
						  <input class="input-xlarge" id="volume2" type="text" placeholder="m³/kg">
						</div>
						
						<br />
						<hr />
						
						<label>Energia Interna</label>
						<div class="input-prepend">
						  <span class="add-on">Líquido</span>
						  <input class="input-xlarge" id="energia1" type="text" placeholder="uf">
						</div>
						
						<div class="input-prepend btn-group">
						  <span class="add-on">Evaporação</span>
						  <input class="input-xlarge" id="energia2" type="text" placeholder="ufg">
						</div>
						
						<div class="input-prepend btn-group">
						  <span class="add-on">Vapor</span>
						  <input class="input-xlarge" id="energia3" type="text" placeholder="ug">
						</div>
						
						<br />
						<hr />
						
						<label>Entalpia</label>
						<div class="input-prepend">
						  <span class="add-on">Líquido</span>
						  <input class="input-xlarge" id="entalpia1" type="text" placeholder="hf">
						</div>
						
						<div class="input-prepend btn-group">
						  <span class="add-on">Evaporação</span>
						  <input class="input-xlarge" id="entalpia2" type="text" placeholder="hfg">
						</div>
						
						<div class="input-prepend btn-group">
						  <span class="add-on">Vapor</span>
						  <input class="input-xlarge" id="entalpia3" type="text" placeholder="hg">
						</div>
						
						<br />
						<hr />
						
						<label>Entropia</label>
						<div class="input-prepend">
						  <span class="add-on">Líquido</span>
						  <input class="input-xlarge" id="entropia1" type="text" placeholder="sf">
						</div>
						
						<div class="input-prepend">
						  <span class="add-on">Evaporação</span>
						  <input class="input-xlarge" id="entropia2" type="text" placeholder="sfg">
						</div>
						
						<div class="input-prepend input-append">
						  <div class="btn-group">
                                                    <span class="add-on">Vapor</span>
                                                    <input class="" id="entropia3" type="text" placeholder="sg">	
						  </div>
						</div>
					</fieldset>
				</form>
                                <button id="btn_verificar" class="btn btn-success">Verificar</button>
            </div>
<?php include_once './public/footer.php';