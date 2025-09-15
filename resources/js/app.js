import "./bootstrap";
import { createApp } from "vue";

// Import Vue components
import ExampleComponent from "./components/ExampleComponent.vue";

// Create Vue app
const app = createApp({});

// Register components
app.component("example-component", ExampleComponent);

// Mount Vue app
app.mount("#app");

console.log("Laravel + Vue.js application loaded successfully!");
