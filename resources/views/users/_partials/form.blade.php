@csrf
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-plus"></i></span>
    <input type="text" name="name" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basic-addon1" value="{{ $user->name ?? old('name')}}">
</div>


<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{ $user->email ?? old('email')}}">
</div>

<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
    <input type="password" name="password" class="form-control" placeholder="Nova senha" aria-label="Senha" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fas fa-image"></i></span>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-outline-primary"><i class="fas fa-save"></i> Enviar</button>