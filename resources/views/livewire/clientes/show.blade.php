<div class="container mt-5">

    <div class="card">
        <h5 class="card-header">Dados do Cliente</h5>
        <div class="card-body">
            <form class="row" wire:submit.prevent="dados">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <p>{{$cliente->nome}}</p>
                    @error('nome')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <p>{{$cliente->email}}</p>
                    @error('email')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <p>{{$cliente->endereco}}</p>
                    @error('endereco')
                        <span class="text-warning small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Telefone</label>
                    <p>{{$cliente->telefone}}</p>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">CPF</label>
                    <p>{{$cliente->cpf}}</p>
                </div>

                <div class="mb-3 mt-3">
                  <a class="btn btn-danger" href="{{route('clientes.index')}}">Fechar</a>
                </div>
            </form>
        </div>
    </div>
</div>
