<script setup>
import { usePage } from '@inertiajs/vue3';

</script>
 
<template>
   <h4 class="text-4xl text-center font-bold mt-32 ">Wellcome to <span class=" text-4xl font-bold text-red-600 ">`{{ usePage().props.auth.user.name }}`</span> Visit  Vue Simple Authentication </h4>
</template> 
 
<style scoped>
 
</style>