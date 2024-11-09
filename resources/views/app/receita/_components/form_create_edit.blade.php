<h4 class="display-6">Adicionar Receita</h4>
<form class="w-50 row g-3 p-4" method="POST" action="{{route('receita.store')}}">
  @csrf
  <div class="col-md-6">
    <label for="receita" class="form-label">Receita</label>
    <input type="text" class="form-control" id="receita" name="receita">
  </div>
  <div class="col-md-6">
    <label for="valor_receita" class="form-label">Valor da Receita</label>
    <input type="number" class="form-control" name="valor_receita" id="valor_receita" step="0.01">
  </div>
  <div class="col-md-12">
      <label for="tipo_receita" class="form-label">Tipo de Receita</label>
        <select id="tipo_receita" class="form-select" name="tipo_receita_id">
            <option selected class="disabledSelect">Selecione um tipo de receita</option>
            @foreach ($tipo_receitas as $tipo_receita)
                <option value="{{$tipo_receita->id}}">{{$tipo_receita->tipo_receita}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Descrição da receita</label>
    </div>

    <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
    <div class="col-12">
        <button type="submit" class="btn btn-primary w-100 p-2">Adicionar Receita</button>
    </div>
</form>