  <div>
      <h3>livewire pagination </h3>
    <ul>
        @foreach ($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>
    <p>show pagination without full page loading refresh</p>
    <div>{{ $articles->links() }}</div>

    <h3>users pagaination in livewire</h3>

<ul>
    @foreach($users as $user)
        <li>{{ $user->name}}</li>
    @endforeach
</ul>
<p>show the pagination in laravel</p>
<div>{{ $users->links() }}</div>

<p>to customize paginaion the is a link in livewire site to conent with bootstrap or using vue ,,, or Using A Custom Pagination View</p>
<h3>Using A Custom Pagination View method in DataTble . php class , and copy ex . from LW site . it work but i disable it method and return to deffult</h3>
  </div>
