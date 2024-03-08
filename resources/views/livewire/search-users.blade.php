<div>
    <input type="text" wire:model="search" placeholder="Search Users...">

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>