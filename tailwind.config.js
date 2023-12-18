/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#0E8388",
                light: "#CBE4DE",
                dark: "#2E4F4F",
                darker: "#2C3333",
            },
        },
    },
    plugins: [],
};
