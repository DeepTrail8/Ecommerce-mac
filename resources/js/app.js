import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

/* Bootstrap core */
import "./bootstrap.js";

/* Backend scripts */
import "./backend/main.js";
import "./backend/bootstrap-select.min.js";

/* Frontend scripts */
import "./frontend/bootstrap.bundle.min.js";
import "./frontend/swiper.min.js";
import "./frontend/theme.js";

/* Example global ready */
$(function () {
    console.log("Vite + Backend + Frontend Initialized Successfully");
});
