<div>
    <div class="text-center py-2 font-mono text-lg"><b>Registrar Membresia</b></div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit='createMember'>
        <input type="text" wire:model='tipo' placeholder="tipo">
        <input type="number" wire:model='duracion' placeholder="duracion">
        <input type="date" wire:model='Finicio' placeholder="Finicio">
        <input type="number" wire:model='precio' placeholder="precio">

        <button> Guardar</button>
    </form>
</div>
