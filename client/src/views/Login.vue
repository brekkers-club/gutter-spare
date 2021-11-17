<script>
import { defineComponent, onBeforeMount } from "vue";
import http from '@/http';

export default defineComponent({
  setup() {
    onBeforeMount(() => {
        http.get('/sanctum/csrf-cookie')
            .then((response) => {
                console.log({ response });
            });
    });
  },
});
</script>

<template>
  <div>Login</div>
</template>