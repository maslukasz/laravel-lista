<div>
    
    <div class='container'>
        @foreach ($servers as $server)
        <div class="row">
            <div class='col'>{{ $server->server_id }}</div>
        </div>    
        @endforeach
    </div>
    
    <button wire:click='get_servers'>asdasd</button>
</div>