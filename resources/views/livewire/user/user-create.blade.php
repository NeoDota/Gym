<div>
    <div class="text-red">USERS</div>
    <form wire:submit='createUser'>
        <input wire:model='name' type="text" placeholder="Nombre">
        <input wire:model='email' type="email" placeholder="Email">
        <input wire:model='password' type="password" placeholder="Contraseño">
        <input wire:model='image' type="file" accept="image/png, image/jpeg, image/jpg" >
        @error('image')
            {{ $message }}
        @enderror
        <x-button class="btn btn-primary">Enviar</x-button>
    </form>
</div>
