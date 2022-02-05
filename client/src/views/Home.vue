<template>
  <div>Home</div>
</template>
<script lang="ts">
import http from "@/http";
import { defineComponent } from "vue";

export default defineComponent({
  setup() {
    http
      .get("/api/user")
      .then((data) => console.log({ data }))
      .catch((error) => console.log({ error }));
  },
});
</script>
