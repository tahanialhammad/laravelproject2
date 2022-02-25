{{-- category L8FS V-34 --}}
{{-- <select class="form-select" aria-label="Default select example">
        @foreach ($categories as $category)
    
        <option value="{{ $category->slug}}">{{ $category->name}}</option>
       
        @endforeach
      </select> --}}

{{-- update dropdowen tep 3 scop gategory L8FS v-39  --}}
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{-- if we have cuurect category then echo cat.name else echo eord categories --}}
        {{ isset($cuurentCategory) ? ucwords($cuurentCategory->name) : 'Categories' }}
        {{-- update currentcategory in controller v-39 --}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/articles">All</a></li>

        @foreach ($categories as $category)
            {{--L8FS  v-34 {{ isset($cuurentCategory) && $cuurentCategory->id == $category->id ? 'active' : '' }}    or with is --}}
            <li><a class="dropdown-item {{ isset($cuurentCategory) && $cuurentCategory->is($category) ? 'active' : '' }}"
                    href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>

                    {{-- update end V-39 , then word category becoum part of link not work yet LATER--}}
                    {{-- <li><a class="dropdown-item {{ isset($cuurentCategory) && $cuurentCategory->is($category) ? 'active' : '' }}"
                        href="/?category={{ $category->slug }}">{{ $category->name }}</a></li> --}}
        @endforeach
    </ul>
</div>
