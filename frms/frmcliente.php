<?php
include('../include/cabecalho.php');
include('../conexao/conexao.php');
include('../include/menu.php');
?>
<div class="container">
<form>
<div class="row">
    <div class="col-sm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cliente</label>
    <input type="text" class="form-control">
    </div>
    </div>

    <div class="col-sm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data do cadastro</label>
    <input type="date" class="form-control">
    </div>
    </div>

    <div class="col-sm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CPF</label>
    <input type="text" class="form-control">
    </div>
    
        

    </div>
  </div>

<div class="col-sm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereço</label>
    <input type="email" class="form-control">
    </div>
    </div>

    <div class="col-sm">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cep</label>
    <input type="text" class="form-control">
    </div>
    </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
