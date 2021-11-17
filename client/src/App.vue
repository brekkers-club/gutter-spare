<script setup lang="ts">
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup
import { provide, ref } from "vue";
import providers from '@/providers';
import { Switch } from "@headlessui/vue";
import DefaultLayout from "./layouts/Default.vue";

const enabled = ref(false);

Object.keys(providers).forEach((key) => provide(key, providers[key]));
</script>

<template>
  <DefaultLayout>
    <router-view></router-view>
  </DefaultLayout>
</template>

<style>
</style>
