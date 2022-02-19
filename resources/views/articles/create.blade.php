@extends('layouts.app')

@section('content')

<div class="container">
<h3>Create new article</h3>

<form method="POST" action="/articles">
<!-- Cross-site request forgery -->
@csrf
  <div class="mb-3">
    <label for="titleInput" class="form-label">Artikel titel</label>
    <input type="text" class="form-control" id="titleInput" name="title" required>
  </div>
  <div class="mb-3">
    <label for="imageurl" class="form-label">Artikel afbeelding</label>
    <input type="text" class="form-control" id="imageurl" name="image" required>
  </div>
  <div class="mb-3">
    <label for="excerpTextarea" class="form-label">Artikel beschrijven</label>
    <textarea class="form-control" id="excerpTextarea" name="excerpt" rows="3" required></textarea>
  </div>
  <div class="mb-3">
    <label for="bodyTextarea" class="form-label">Artikel</label>
    <textarea class="form-control" id="bodyTextarea" name="body" rows="3" required></textarea>
  </div>

  <div class="mb-3">
    <select class="form-select" aria-label="Select Tags" name="tags[]" multiple>
        @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
  </div>

  {{-- <div class="mb-3">
    <select class="form-select" aria-label="Select categories" name="categories[]" multiple>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
  </div> --}}
    <button type="submit" class="btn btn-primary">Verzenden</button>
  </form>

</div>

@endsection
