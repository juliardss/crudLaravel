<div class="mb-3">
    <label>Nome</label>

    <input type="text"
    name="nome"
    class="form-control"
    value="{{ $row->nome ?? '' }}">
</div>

<div class="mb-3">
    <label>Celular</label>

    <input type="text"
    name="celular"
    class="form-control"
    value="{{ $row->celular ?? '' }}">
</div>

<div class="mb-3">
    <label>Imagem</label>

    <input type="text"
    name="imagem"
    class="form-control"
    value="{{ $row->imagem ?? '' }}">
</div>

<div class="mb-3">

    <label>Curso</label>

    <select name="id_curso" class="form-control">

        @foreach($cursos as $curso)

            <option value="{{ $curso->id }}">

                {{ $curso->titulo }}

            </option>

        @endforeach

    </select>

</div>