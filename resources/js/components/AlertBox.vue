<template>
    <div :class="data.type" class="lert-dismissible fade show" role="alert">
        {{ data.message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>
<script>
export default {
    name: 'alert-box',
    data() {
        return {
        }
    },
    props: {
        data: {
            type: Object,
            default: {}
        }
    }
}
</script>
<style lang="scss" scoped>
div {
    position: absolute;
    bottom: 0px;
    right: 0px;
    margin-top: 10px;
    margin-right: 5px;  
}

</style>