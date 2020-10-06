<div class="form-group">
    <label for="tipo_certidao">Tipo da Certidão</label>
    <input type="text" class="form-control" id="tipo_certidao" name="tipo_certidao" placeholder="Digite o nome aqui"
    value="{{ $certidao->tipo_certidao ?? '' }}">
</div>
<div class="form-group">
    <label for="envolvido1">Envolvido1</label>
    <input type="text" class="form-control" id="envolvido1" name="envolvido1" placeholder="Digite o nome aqui"
        value="{{ $certidao->envolvido1 ?? '' }}">
</div>
<div class="form-group">
    <label for="envolvido2">Envolvido2</label>
    <input type="text" class="form-control" id="envolvido2" name="envolvido2" placeholder="Digite o nome aqui"
        value="{{ $certidao->envolvido2 ?? '' }}">
</div>
<div class="form-group">
    <label for="data">Data</label>
    <input type="text" class="form-control time-mask" id="data" name="data" placeholder="Ex.: 00/00/0000"
        value="{{ $certidao->data ?? '' }}">
</div>
