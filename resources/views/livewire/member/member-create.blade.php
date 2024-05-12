<div>
    <form wire:submit='createMember'>
        <input type="text" wire:model='tipo' placeholder="tipo">
        <input type="number" wire:model='duracion' placeholder="duracion">
        <input type="date" wire:model='Finicio' placeholder="Finicio">
        <input type="number" wire:model='precio' placeholder="precio">

        <button> Guardar</button>
    </form>
</div>
