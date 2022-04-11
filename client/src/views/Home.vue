<template>
  <div>Home</div>
</template>
<script lang="ts">
import http from "@/http";
import { defineComponent } from "vue";

export default defineComponent({
  setup() {
    http.get("/api/v1/games").then((data) => console.log({ data }));
  },
});
</script>
