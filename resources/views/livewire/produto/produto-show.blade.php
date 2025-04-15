<div class="mt-5">
    <div class="card mx-auto col-md-5">
        <h5 class="card-header">Dados do Produto</h5>
        <div class="card-body">
            <div class="row" wire:model="mount">
                <div class="col-6">
                    <label for="inputAddress" class="form-label text-dark">Nome</label>
                    <p class="text-body-secondary" wire:model.defer="nome">{{ $nome }}</p>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Ingredientes</label>
                    <p class="text-body-secondary" wire:model.defer="ingredientes">{{ $ingredientes }}</p>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Valor</label>
                    <p class="text-body-secondary" wire:model.defer="valor">{{ $valor }}</p>
                </div>
                <div class="mb-3">
                    @if ($produto->imagem)
                        <img src="{{ asset('storage/' . $produto->imagem) }}" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                    @else
                        <p>Sem imagem disponível</p>
                    @endif
                </div>
                <div class="mb-3 mt-3">
                    <a class="btn btn-danger" href="{{ route('produtos.index') }}">Fechar</a>
                </div>
            </div>
        </div>
    </div>
</div>
