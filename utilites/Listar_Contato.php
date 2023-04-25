<h1>Cadastrar Contato</h1>
<form action="?php=save" method="POST">
 <div class="mb-3">
     <label>Tipo: </label>
     <select class="form-control" id="tipo">
      <option>Telefone</option>
      <option>Email</option>
    </select>
 </div>
 <div class="mb-3">
     <label>Descrição: </label>
     <textarea class="form-control" id="descricao" rows="3"></textarea>
 </div>
 <div class="mb-3">
     <label>Pessoa Responsavel: </label>
     <input type="text" name="cpf" class="form-control">
 </div>
 <div class="mb-3">
     <button type="submit" class="btn btn-dark">Enviar</button>
 </div>
</form>