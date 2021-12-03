<template>
  <div>
    <a :href="href" @click.prevent="scroll">
        <slot></slot>
    </a>
  </div>
</template>

<script>
export default {
    props: ['href'],
    methods: {
        scroll() {
            document.querySelector(this.href).scrollIntoView({ behavior: 'smooth' });
        },
    },
};
</script>
