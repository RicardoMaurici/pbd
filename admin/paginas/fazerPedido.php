<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>
<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Pedido</h3>
  </div>
  <div class="panel-body">
    <button id="addItem" name="addItem" class="btn btn-primary" data-title="add" data-toggle="modal" data-target="#add" data-placement="top" rel="tooltip">Adicionar Item</button>
    <hr />
    <label>Itens no pedido: </label>
  	<div class="col-md-12">
        <div class="table-responsive">  
            <table id="mytable" class="table table-bordred table-striped">    
                <thead>
                  <th>Material</th>
                  <th>Quantidade</th>
                  <th>Valor Unidade</th>
                </thead>
                <tbody>
    
                  <tr> <!--Vai preenchendo de acordo que adiciona item-->
                      <td>Caderno</td>
                      <td>100</td>
                      <td>R$ 9,90</td>
                  </tr>
                
                  <tr>
                      <td>Apostila</td>
                      <td>1500</td>
                      <td>R$ 20,00</td>
                  </tr>
                </tbody>       
                </table>     
            </div>
            <hr />
          </div>


    <form class="form-horizontal" role="form">
      <div class="form-group">
        <div class="col-sm-2">
          <label for="lbpagamento" >Forma Pagamento</label>
        </div>
          <div class="col-sm-2">
            <select class="form-control" id="slpagamento"> <!--infomacao vem do banco-->
              <option>Boleto</option> 
              <option>Cartão</option>
            </select>
          </div>
      </div>
    </form>
    &nbsp&nbsp&nbsp&nbsp
    <div class="form-group">
      <div class="col-sm-4">
      </div>
      <a href="pedidoMaterial.php" class="btn btn-primary" style="width: 25%;">Finalizar Pedido</a>
    </div>
</div>
</div>
  
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Adicionando Item</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="lbmaterial" class="col-sm-2 control-label">Material</label>
              <div class="col-sm-5">
                <select class="form-control" id="slmaterial"> <!--infomacao vem do banco-->
                  <option>Caderno</option> 
                  <option>Apostila</option>
                </select>
              </div>
              <label for="lbmarca" class="col-sm-2 control-label">Marca</label>
              <div class="col-sm-2">
                <select class="form-control" id="slmarca">
                  <option>Faber Castell</option> 
                  <option>Tilibra</option>
                </select>
              </div>
        </div>

        <div class="form-group">
          <label for="lbqtd" class="col-sm-2 control-label">Quantidade</label>
          <div class="col-sm-2">
                <select class="form-control" id="slqtd">
                  <option>0</option> 
                  <option>1</option>
                </select>
          </div>
          <label for="lbvalor" class="col-sm-5 control-label">Valor Unidade</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="ivalor" placeholder="Valor">
            </div>
        </div>
        <div class="form-group">
          <label for="lbqtd" class="col-sm-2 control-label">Fornecedor</label>
            <div class="col-sm-9">
              <select class="form-control" id="slqtd">
                  <option>Maria ME</option> 
                  <option>José ME</option>
              </select>
            </div>
        </div>
      </form>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-primary" >Adicionar</button>
      </div>
    </div>
  </div>
</div>


<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>

