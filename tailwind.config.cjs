module.exports = {
  content: [
    // Letting sass build it's own files
    // "./src/**/*.{html,js,scss}",
    "./**/*.php",
    "../**/*.php",
  ],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "980px",
      xl: "1280px",
      "2xl": "1536px",
    },
  },
  plugins: []
};
