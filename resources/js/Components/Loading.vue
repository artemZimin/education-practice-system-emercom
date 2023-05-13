<template>
    <div class="d-flex justify-center align-center loading-wrapper">
        <div class="bg-blue-grey-darken-1 position-fixed loading-bg"></div>
        <v-progress-circular
            :size="70"
            :width="7"
            color="purple"
            indeterminate
        ></v-progress-circular>
    </div>
</template>

<script>
export default {
    name: "Loading"
}
</script>

<style scoped>
.loading-wrapper {
    z-index: 9999;
    position: fixed;
    height: 100vh;
    width: 100vw;
}

.loading-bg {
    height: 100vh;
    width: 100vw;
    opacity: .5;
}
</style>
