@extends('user.templates.user-template')

@section('content')

<div class="container">
<h3>Update article</h3>

<form method="POST" action="/articles/{{ $article->id }}">
<!-- Cross-site request forgery -->
@csrf
@method('PUT')

  <div class="mb-3">
    <label for="titleInput" class="form-label">Artikel titel</label>
    <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}" required>
  </div>
  <div class="mb-3">
    <label for="imageurl" class="form-label">Artikel afbeelding</label>
    <input type="text" class="form-control" id="imageurl" name="image"  value="{{ $article->image }}" required>
  </div>
  <div class="mb-3">
    <label for="excerpTextarea" class="form-label">Artikel beschrijven</label>
    <textarea class="form-control" id="excerpTextarea" name="excerpt" rows="3" required>{{ $article->excerpt }}</textarea>
  </div>
  <div class="mb-3">
    <label for="bodyTextarea" class="form-label">Artikel</label>
    <textarea class="form-control" id="bodyTextarea" name="body" rows="3" required>{{ $article->body }}</textarea>
  </div>

  <!-- <div class="mb-3">
    <select class="form-select" aria-label="Select Tags" name="tags[]" multiple>
        @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
  </div> -->



    <button type="submit" class="btn btn-primary">Verzenden</button>
  </form>

</div>

@endsection
