<div class="mt-5">
    <div class="card mx-auto col-md-5">
        <h5 class="card-header">Dados do Cliente</h5>
        <div class="card-body">
            <div class="row" wire:model="mount">
                <div class="col-6">
                    <label for="inputAddress" class="form-label text-dark">Nome</label>
                    <p class="text-body-secondary" wire:model.defer="nome">{{$nome}}</p>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <p class="text-body-secondary" wire:model.defer="email">{{$email}}</p>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <p class="text-body-secondary" wire:model.defer="endereco">{{$endereco}}</p>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Telefone</label>
                    <p class="text-body-secondary" wire:model.defer="telefone">{{$telefone}}</p>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">CPF</label>
                    <p class="text-body-secondary" wire:model.defer="cpf">{{$cpf}}</p>
                </div>

                <div class="mb-3 mt-3">
                  <a class="btn btn-danger" href="{{route('clientes.index')}}">Fechar</a>
                </div>
            </div>
        </div>
    </div>
</div>
