<div>
   <h1>Popover from Bootstrap</h1>
    <button type="button" class="btn btn-lg btn-success" data-bs-toggle="popover" data-bs-html="true"
        title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">
        Click to toggle popover
    </button>

    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title"
        data-bs-trigger="hover" data-bs-content="And here's some amazing content. It's very engaging. Right?">
        Hover to toggle popover
    </button>


    <hr>

    <button id="popover-target-1">
        hover over me
    </button>

    <div target="popover-target-1" data-bs-toggle="popover">
        <template v-solt:title>POPPPPOVER TITLE</template>
        bodytext
    </div>

</div>
