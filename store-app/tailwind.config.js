
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: [],
  }, // This closing brace was missing in the previous response
  plugins: [require("daisyui")],
}

