<form class="justify-content-center justify-content-md-start mb-3 mb-md-0"
      method="get"
      action="<?= urlBase('')?>">
    <div class="input-group input-group-sm">
        <input type="text" class="form-control" name="w" placeholder="Digite aqui o que procura"
        value="<?= $searchData['term']?>">
        <button class="btn-busca" class="btn">Buscar</button>
    </div>
</form>