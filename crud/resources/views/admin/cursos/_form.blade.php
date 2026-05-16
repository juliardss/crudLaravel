<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($row->titulo) ? $row->titulo : '' }}">
    <label>Título do Curso</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($row->descricao) ? $row->descricao : '' }}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{ isset($row->valor) ? $row->valor : '' }}">
    <label>Valor</label>
</div>

<div class="input-field">
    <input type="text" name="imagem" value="{{ isset($row->imagem) ? $row->imagem : '' }}">
    <label for="imagem">Caminho da Imagem</label>
</div>

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" {{ isset($row->publicado) && $row->publicado == 'sim' ? 'checked' : '' }} />
            <span>Publicar?</span>
        </label>
    </p>
    <br>
</div>