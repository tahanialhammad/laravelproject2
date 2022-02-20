<div>
    <h1>Filter</h1>
    <div class="d-flex">
        @include('user.articles.partials.category')

        {{-- Search form 1 way --}}
        <form method="GET" action="#">
            {{-- <input type="text" name="search" placeholder="Search (The Messy Way)" class="w-100"> --}}
            {{-- set value to what we search  step 1, 2 --}}
            {{-- Search (The Cleaner Way) step 2-6 --}}
            <input type="text" name="search" placeholder="Search (The Messy Way)" class="form-control ms-3 w-100"
                value="{{ request('search') }}">

            {{-- <h1>Advanced Eloquent Query Constraints : search within categoray step 7</h1> --}}
            {{-- search within categoray :  https://laracasts.com/series/laravel-8-from-scratch/episodes/39 --}}
        </form>
    </div>

    <hr>
</div>
