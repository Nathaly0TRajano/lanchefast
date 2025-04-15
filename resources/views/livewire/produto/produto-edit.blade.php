<div class=" mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card col-md-5 mx-auto">
        <h5 class="card-header">Editor de Produtos</h5>
        <div class="card-body">
            <form class="" wire:submit.prevent="salvar">
                <div class="col-md-12 mb-2">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputAddress" wire:model.defer="nome">
                    @error('nome')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputEmail4" class="form-label">Ingredientes</label>
                    <textarea type="text" class="form-control" id="inputEmail4" name="ingredientes" wire:model.defer="ingredientes">{{ $ingredientes }}</textarea>
                    @error('ingredientes')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword4" class="form-label">Valor</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputPassword4" wire:model.defer="valor">
                        <span class="input-group-text"><i class="bi bi-eye-slash-fill"></i></span>
                    </div>
                    @error('valor')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <button class="btn btn-success">Salvar</button>
                    <a class="btn btn-danger" href="{{ route('produtos.index') }}">Fechar</a>
                </div>
            </form>
        </div>
    </div>
</div>
