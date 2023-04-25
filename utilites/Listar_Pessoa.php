<h1>Cadastrar Pessoa</h1>
<form action="?page=salvar_pessoa" method="POST">
<input type="hidden" name="acao" value="cadastrar_pessoa">

 <div class="mb-3">
     <label>Nome: </label>
     <input type="text" name="nome" class="form-control">
 </div>

 <div class="mb-3">
     <label>CPF: </label>
     <input type="text" name="cpf" class="form-control">
 </div>

 <div class="mb-3">
     <button type="submit" class="btn btn-dark">Enviar</button>
 </div>
</form>
