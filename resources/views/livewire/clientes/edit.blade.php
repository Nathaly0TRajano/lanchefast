<div class=" mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card col-md-7 mx-auto">
        <h5 class="card-header">Editor de Clientes</h5>
        <div class="card-body">
            <form class="row" wire:submit.prevent="salvar">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="inputAddress" wire:model.defer="nome">
                    @error('nome')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" wire:model.defer="email">
                    @error('email')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <div  class="input-group">
                        <input type="password" class="form-control" id="inputPassword4" wire:model.defer="senha">
                        <span class="input-group-text"><i class="bi bi-eye-slash-fill"></i></span>
                    </div>
                    @error('senha')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                        wire:model.defer="endereco">
                    @error('endereco')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="telefone">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputCity" wire:model.defer="cpf">
                </div>

                <div class="mt-3">
                    <button class="btn btn-success">Salvar</button>
                    <a class="btn btn-danger" href="{{route('clientes.index')}}">Fechar</a>
                </div>
            </form>
        </div>
    </div>
</div>
