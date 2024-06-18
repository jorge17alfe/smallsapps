<?php $num =1?>
@foreach ($users as $user)
    <li><b>{{ $num++ }}.- </b>{{ $user->name }} ==>> {{ $user->email }}</li>
@endforeach
