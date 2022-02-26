     {{-- form s L8FS V-55 --}}

     {{-- display form only if u sign v-56 --}}
     @auth
         <div>
             <form class="border boreder-2 border dark mb-4" action="/articles/{{ $article->id }}/comments" method="POST">
                 @csrf
                 <header class="d-flex">
                     <img class="rounded me-2" src="https://i.pravatar.cc/40?={{ auth()->id() }}" alt="">
                     <h3>Write commment </h3>
                 </header>
                 <textarea name="body" id="" class="w-100 mt-2" cols="30" rows="10"
                     placeholder="your comment"></textarea>

                 {{-- show validation error for body input nam--}}
                 @error('body')
                     <p class="text-danger"> {{ $message }}</p>
                 @enderror

                 <div class="border-top float-end">
                     <button type="submit" class="btn btn-dark">send</button>
                 </div>
             </form>
         </div>
     @else
         <h3>
             <a href="/login">Login to leave a comment </a>
         </h3>
     @endauth
     {{-- comments L8FS V-52 V-- --}}
     {{-- php artisan make:model Comment -mfc --}}
     {{-- after update table : php artisan migrate --}}
     {{-- comment factory  v-54 to make comment dynamic --}}
     {{-- dynamic in V-54 --}}



     @foreach ($article->comments as $comment)
         <div class="p-3 mb-3 border border-danger">
             <div class="d-flex">
                 {{-- return rundom avator img --}}
                 <img class="rounded me-2" src="https://i.pravatar.cc/60?={{ $comment->user_id }}" alt="">

                 <div>
                     <header>
                         <h3>{{ $comment->author->nmae }}</h3>
                     </header>
                     <p>posted at:{{ $comment->created_at }}</p>

                     <p>{{ $comment->body }}</p>
                 </div>
             </div>
         </div>
     @endforeach
