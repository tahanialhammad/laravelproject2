<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind cdn  --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
{{-- bulma cdn --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    {{-- style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel project 2</title>
    {{-- LiveWire css  --}}
    @livewireStyles
    {{--OR <livewire:styles /> --}}
</head>
<body>
    {{-- svg loader  --}}
    {{-- <div class="loader">
        <img src="{{ asset('images/grid.svg')}}" alt="">
    </div> --}}

  
    <main>
        <div class="loader-wrapper">
            <div class="progress">
                <div class="color"></div>
            </div>
        </div>
    
        
        @yield('main')
    </main>
  {{-- LiveWire js --}}
   @livewireScripts
   {{-- OR <livewire:scripts /> --}}
    {{-- Scripts  --}}
   <script src="{{ asset('js/app.js') }}"></script>

   <!-- ========== START NEW XCORE :Enable Bootstrap tooltips =========== -->
<script>
    let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    // let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    // let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    
    //     new bootstrap.Tooltip(tooltipTriggerEl,{ trigger: 'manual' });
    
    //     $(tooltipTriggerEl).on("mouseenter", function () {
    //         let _this = this;
    //         $(this).tooltip("show");
    //         $(".bs-tooltip-start").on("mouseleave", function () {
    //             $(_this).tooltip('hide');
    //         });
    //     }).on("mouseleave", function () {
    //         let _this = this;
    //         setTimeout(function () {
    //             if (!$(".bs-tooltip-start:hover").length) {
    //                 $(_this).tooltip("hide");
    //             }
    //         }, 300);
    //     });
    // });



//load more ajax
function loadMoreData(page)
{
    $.ajax({
        url: '?page=' + page,
        type: 'get',
        beforeSend : function ()
        {
            $(".ajax-loader").show();
        }
    })
    .done(function(data){
        if(data.html == ' '){
            $(".ajax-loader").html('No more data');
            return;
        }
        $(".ajax-loader").hide();
        $(".post-data").append(data.html);
    })
    .fail(function(jqXHR, ajaxOptions, thrownError){
        alert('server not responding...');
    })
}

let page = 1;
$(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() >= $(document).height() ){
        page ++;
        loadMoreData(page);
    }
})

    </script>

    {{-- loader script --}}
    <script>
        $(function(){
            setTimeout(() => {
               $('.loader-wrapper').fadeOut(500);
            }, 1000);
        })
    </script>
</body>
</html>