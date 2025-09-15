<template>
  <div
    class="bg-gradient-to-r from-blue-500 to-purple-600 p-6 rounded-lg shadow-lg text-white"
  >
    <h2 class="text-2xl font-bold mb-4">{{ title }}</h2>
    <p class="text-lg mb-4">{{ message }}</p>

    <div class="space-y-4">
      <div>
        <label class="block text-sm font-medium mb-2">Nama:</label>
        <input
          v-model="nama"
          type="text"
          class="w-full px-3 py-2 border border-gray-300 rounded-md text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
          placeholder="Masukkan nama Anda"
        />
      </div>

      <div v-if="nama" class="bg-white bg-opacity-20 p-4 rounded-md">
        <p class="text-lg">
          Halo, <strong>{{ nama }}</strong
          >!
        </p>
        <p class="text-sm opacity-90">Selamat datang di Laravel + Vue.js!</p>
      </div>

      <button
        @click="incrementCounter"
        class="bg-white text-blue-600 px-4 py-2 rounded-md font-semibold hover:bg-gray-100 transition-colors"
      >
        Click me! ({{ counter }})
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ExampleComponent",
  data() {
    return {
      title: "Vue.js Component - Ujikom 2025",
      message: "Component Vue.js berhasil dimuat dalam Laravel!",
      nama: "",
      counter: 0,
    };
  },
  methods: {
    incrementCounter() {
      this.counter++;
    },
  },
  mounted() {
    console.log("Vue component mounted successfully!");
  },
};
</script>

<style scoped>
/* Component-specific styles */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
