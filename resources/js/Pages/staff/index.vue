<template>
    <div>
        staff vue
        <h1>{{ message }}</h1>
        <h2>{{ message2 }}</h2>
        <!-- <Link href="/csmju">go to csmju</Link> -->
    </div>
</template>
<script>
defineProps({ message: String,message2: String });
// import { Link } from "@inertiajs/inertia-vue3";
</script>


<style lang="scss" scoped>

</style>
