<h1>Buscar Afiliado</h1>        
  <!--Comienza Div Login-->
  <div id="login">
      <fieldset>
        <form class="well form-inline form-horizontal" action="<?php echo url_for("afiliado/index");?>" method="post" id="buscarAfiliado">
            <input type="text" class="input-small" placeholder="Nombre y/o Apellido" name="apeynom"></input><br>
            
            <input type="submit" class="btn-success" value="Buscar"></input>
        </form>
     </fieldset> 
  </div>
  <!--Finaliza Div Login-->