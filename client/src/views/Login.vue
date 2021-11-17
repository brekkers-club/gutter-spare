<script lang="ts">
import { defineComponent, onBeforeMount, inject } from "vue";

export default defineComponent({
  setup() {
    const auth = inject("auth");

    onBeforeMount(() => {
      auth.csrf().then((response) => {
        console.log({ response });
      });
    });
  },
});
</script>

<template>
  <div>Login</div>
</template>