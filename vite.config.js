import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/app.css",
               
                //icons backend
                "resources/icons/backend/favicon.ico",
               
              
                //font frontend
                "resources/font/frontend/SofiaProBold.woff",              
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
