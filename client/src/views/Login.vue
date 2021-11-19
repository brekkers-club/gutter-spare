<script lang="ts">
import { defineComponent, onBeforeMount, inject } from "vue";
import { AuthProvider } from "@/providers/auth";

export default defineComponent({
  setup() {
    const auth: AuthProvider = inject("auth");

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