<div class="modal fade" id="new-offer-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Nova Oferta</h4>
                <small>Fidelize seus clientes.</small>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group"><label for="new-offer-title">Título</label>
                        <input type="text" class="form-control" id="new-offer-title" placeholder="Título">
                    </div>
                    <div class="form-group"><label for="new-offer-description">Descrição</label>
                        <textarea class="form-control" rows="3" id="new-offer-description" placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group"><label for="new-offer-date">Data de Início</label>
                        <input type="text" class="form-control" id="new-offer-date" placeholder="Data de Início">
                    </div>
                    <div class="form-group"><label for="new-offer-amount">Valor do desconto</label>
                        <input type="text" class="form-control" id="new-offer-amount" placeholder="Valor do desconto">
                    </div>

                    <div><label> <input type="checkbox" class="js-switch"> Destaque </label></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-accent">Salvar</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem, { color: '#F4AD00' });
    </script>
@endpush
