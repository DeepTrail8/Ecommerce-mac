import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
               
                
               
                "resources/js/app.js",
               "resources/css/app.css",
                //icons backend
                "resources/icons/backend/favicon.ico",
               
              
                //font frontend
                "resources/font/frontend/SofiaProBold.woff",
                //jjj
                //  "resources/css/animate.min.css",
                // "resources/css/animation.css",
                // "resources/css/bootstrap.css",
                // "resources/css/bootstrap-select.min.css",
                // "resources/css/style.css",
                // "resources/css/sweetalert.min.css",
                // "resources/css/custom.css",
                // "resources/font/fonts.css",
                // "resources/icon/style.css",
                // "resources/images/favicon.ico",


            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
