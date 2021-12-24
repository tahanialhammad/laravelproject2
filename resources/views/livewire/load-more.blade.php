<div>
   <h3>load more pagination from livewire</h3>
   <ul>
    @foreach($users as $user)
        <li>{{ $user->name}}</li>
    @endforeach

    <a wire:click="loadmore">load more</a>
</ul>
</div>
