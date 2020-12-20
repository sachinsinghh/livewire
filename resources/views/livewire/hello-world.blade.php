<div>
    <input type="text" wire:model="name" />

    <input type="checkbox" wire:model="loud" />



    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>



    {{ $greeting }}
    @if ($loud)
        Hello {{ $name }}
    @endif
</div>
