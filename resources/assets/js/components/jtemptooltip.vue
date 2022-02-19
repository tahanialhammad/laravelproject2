<template>
<div>
    <!-- step 5 -->
    <div ref="tooltipbody" v-show="false">
        <slot></slot>
    </div>
</div>
</template>

<script>
//import PopperTooltip from 'tooltip.js';

export default {
    props:{
        name: {},
    },

    mounted(){
        document.querySelectorAll(`[data-jtooltip-name=${this.name}}]`).forEach(elem => {

            // new PopperTooltip(elem, {
            //             placement : 'top',
            //             title : "Hardcode title of the tooltip"
            //         });


            //step 5 slot
                new PopperTooltip(elem, {
                        placement : 'top',
                        title :this.$refs.tooltipbody.innerHTML,
                        html: true
                    });


        });
        
    }
}
</script>
