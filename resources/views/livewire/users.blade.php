<div>
    <label >
        Search: 
        <input  type="search" wire:model.live="search">
    </label>
    <ul>
        @foreach ($users as $user)
            
            <li>{{$user->id .".- ". $user->name." ==>> ".$user->created_at }}</li>
            
        @endforeach
    </ul>
</div>
