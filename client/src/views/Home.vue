<template>
  <div>Home</div>
</template>
<script lang="ts">
import http from "@/http";
import { defineComponent } from "vue";

export default defineComponent({
  setup() {
    // setInterval(() => {
    http
      .get("/api/user")
      .then((data) => console.log({ data }))
      .catch((error) => console.log({ error }));
    // }, 1000)
  },
});
</script>
