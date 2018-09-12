<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <b-img :src="image" rounded="circle" slot="aside" width="40" height="40" />
        <b-card>
            <slot></slot>
        </b-card>
    </b-media>

</template>

<script>
    export default {
        props: {
            writtenByMe: Boolean,
            image: String
        },
        data() {
            return {
            };
        }, 
        mounted() {
            //console.log('Valor de writtenByMe: ', this.writtenByMe)
        }
    }
</script>
