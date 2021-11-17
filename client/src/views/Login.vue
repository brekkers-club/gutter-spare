<script>
import { defineComponent, onBeforeMount } from "vue";
import axios from 'axios';

export default defineComponent({
  setup() {
    onBeforeMount(() => {
        axios.get('http://localhost:8888/sanctum/csrf-cookie')
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