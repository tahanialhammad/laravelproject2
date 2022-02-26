@extends('user.templates.user-template')

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
                {{-- use upload image file in L*FS v-64 Later  --}}
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
            <div class="mb-3">
                category 
                {{-- nog niet werk , nu update in V-63--}}
                <select class="form-select" aria-label="Select category" name="category">
                  @php
                   $categories = \App\Models\Category::all();   
                  @endphp
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Verzenden</button>
        </form>

    </div>
@endsection
