<h1>Buscar Prestador</h1>        
  <div id="login">
      <fieldset>
        <form class="well form-inline form-horizontal" action="<?php echo url_for("prestador/index");?>" method="post" id="buscarPrestador">
            <input type="text" class="input-small" placeholder="Nombre y/o Apellido" name="apeynom"></input><br>
            
            <input type="submit" class="btn-success" value="Buscar"></input>
        </form>
     </fieldset> 
  </div>