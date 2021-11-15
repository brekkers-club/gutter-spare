<script setup lang="ts">
// This starter template is using Vue 3 <script setup> SFCs
// Check out https://v3.vuejs.org/api/sfc-script-setup.html#sfc-script-setup
  import { ref } from 'vue'
  import { Switch } from '@headlessui/vue'

  const enabled = ref(false)
</script>

<template>
  <div class="container mx-auto">
    <Switch
      v-model="enabled"
      :class="enabled ? 'bg-green-500' : 'bg-gray-300'"
      class="relative inline-flex items-center h-6 rounded-full w-11"
    >
      <span class="sr-only">Enable notifications</span>
      <span
        :class="enabled ? 'translate-x-6' : 'translate-x-1'"
        class="inline-block w-4 h-4 transform bg-white rounded-full transition duration-200 ease-in-out transform"
      />
    </Switch>
  </div>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
