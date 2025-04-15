<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card row mx-auto col-md-7 mb-5">
        <div class="card-header">
            <h4>Cadastro de Produtos</h4>
        </div>
        <div class="card-body">

            <form class="row" wire:submit.prevent="store">
                <div class="col-7">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputAddress" wire:model.defer="nome">
                    @error('nome')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-5">
                    <label for="inputAddress" class="form-label">Valor</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                        <input type="text" class="form-control"
                            aria-label="Dollar amount (with dot and two decimal places)" wire:model.defer="valor">
                    </div>
                </div>
                @error('valor')
                    <span class="text-warning small">{{ $message }}</span>
                @enderror

                <div class="mb-2">
                    <label for="input">Ingredientes</label>
                    <textarea name="ingredientes" id="ingredientes" class="form-control" rows="5" wire:model.defer="ingredientes"></textarea>
                    @error('ingredientes')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="imagem" class="form-label">Imagem do Produto</label>
                    <input type="file" id="imagem" wire:model.defer="imagem" class="form-control">
                </div>
                @if ($imagem)
                    <div class="mt-2">
                        <strong>Pré-visualização da imagem:</strong>
                        <img src="{{ $imagem->temporaryUrl() }}" class="img-fluid" style="max-width: 200px;">
                    </div>
                @endif

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>
