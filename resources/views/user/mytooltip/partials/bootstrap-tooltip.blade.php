<div>
    <h1>Bootstrap Tooltip with Popperjs</h1>


    <div>
        <h3>defualt</h3>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
            title="Tooltip on top">
            Tooltip on top
        </button>

        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true"
            title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
            Tooltip with HTML
        </button>
    </div>



    <div>
        <h3>with more option </h3>
        <a type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
            data-bs-animation="false" data-bs-custom-class="xcoretool"
            title="photo in tootip <br/><img src='http://getbootstrap.com/apple-touch-icon.png' />">
            Tooltip with img
        </a>


        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-html="true" data-bs-delay="1000"   data-bs-trigger="hover click "
            title="link in tootip <br/><a href='http://getbootstrap.com/apple-touch-icon.png' class='text-success'>link</a>">
            Tooltip with link with click even to stay open
        </button>


        <a type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
            data-bs-delay="5000"
            title="klik hier <a href='https://www.youtube.com/' class='text-danger'>use data template</a>"
            data-bs-template='<div class="bg-info tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner text-success"></div></div>'>
            tooltip with template style and dealy </a>



        <a type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true"
            data-bs-delay="1000" title="klik hier <a href=" https://www.youtube.com/">use data template and dealy</a>"
        >
        tooltip with xcore problem</a>

        <hr>

        <tool-tip title="haalo xcore tool tip with vue and delay"></tool-tip>

    </div>
