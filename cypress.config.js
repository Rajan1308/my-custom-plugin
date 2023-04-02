const { defineConfig } = require("cypress");

module.exports = defineConfig({
	env: {
		wpUser: 'root',
		wpPassword: 'root',
	},
  e2e: {
	  baseUrl: 'http://localhost:8000/',
    setupNodeEvents(on, config) {
      // implement node event listeners here
    },
  },
});