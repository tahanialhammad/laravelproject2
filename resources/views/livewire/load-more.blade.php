<div>
   <h3>load more pagination from livewire</h3>
   <ul>
    @foreach($users as $user)
        <li>{{ $user->name}}</li>
    @endforeach

    <a wire:click="loadmore" class="btn btn-info">load more</a>
</ul>
</div>
composer update vendor/livewire