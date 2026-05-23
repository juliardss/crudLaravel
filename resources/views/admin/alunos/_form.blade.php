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

    <label>Curso</label>

    <select name="id_curso" class="form-control">

        @foreach($cursos as $curso)

            <option value="{{ $curso->id }}">

                {{ $curso->titulo }}

            </option>

        @endforeach

    </select>

</div>

<div class="file-field input-field">

    <div class="btn blue">

        <span>Imagem</span>

        <input type="file" name="arquivo">

    </div>

    <div class="file-path-wrapper">

        <input class="file-path validate"
               type="text">

    </div>

</div>

@if(isset($row->imagem))

<div class="input-field">

    <img width="150"
         src="{{ asset($row->imagem) }}">

</div>

@endif