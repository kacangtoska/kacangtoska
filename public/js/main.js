(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner();

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".sticky-top").addClass("shadow-sm").css("top", "0px");
        } else {
            $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000,
    });

    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
        },
    });

    // Portfolio isotope and filter
    var portfolioIsotope = $(".portfolio-container").isotope({
        itemSelector: ".portfolio-item",
        layoutMode: "fitRows",
    });
    $("#portfolio-flters li").on("click", function () {
        $("#portfolio-flters li").removeClass("active");
        $(this).addClass("active");

        portfolioIsotope.isotope({ filter: $(this).data("filter") });
    });
})(jQuery);

/**
 *  Light Switch @version v0.1.4
 */

(function () {
    let lightSwitch = document.getElementById("lightSwitch");
    if (!lightSwitch) {
        return;
    }

    /**
     * @function darkmode
     * @summary: changes the theme to 'dark mode' and save settings to local stroage.
     * Basically, replaces/toggles every CSS class that has '-light' class with '-dark'
     */
    function darkMode() {
        document.querySelectorAll(".bg-light").forEach((element) => {
            element.className = element.className.replace(/-light/g, "-dark");
        });

        document.body.classList.add("bg-dark");

        if (document.body.classList.contains("text-dark")) {
            document.body.classList.replace("text-dark", "text-light");
        } else {
            document.body.classList.add("text-light");
        }

        // Tables
        var tables = document.querySelectorAll("table");
        for (var i = 0; i < tables.length; i++) {
            // add table-dark class to each table
            tables[i].classList.add("table-dark");
        }

        // set light switch input to true
        if (!lightSwitch.checked) {
            lightSwitch.checked = true;
        }
        localStorage.setItem("lightSwitch", "dark");
    }

    /**
     * @function lightmode
     * @summary: changes the theme to 'light mode' and save settings to local stroage.
     */
    function lightMode() {
        document.querySelectorAll(".bg-dark").forEach((element) => {
            element.className = element.className.replace(/-dark/g, "-light");
        });

        document.body.classList.add("bg-light");

        if (document.body.classList.contains("text-light")) {
            document.body.classList.replace("text-light", "text-dark");
        } else {
            document.body.classList.add("text-dark");
        }

        // Tables
        var tables = document.querySelectorAll("table");
        for (var i = 0; i < tables.length; i++) {
            if (tables[i].classList.contains("table-dark")) {
                tables[i].classList.remove("table-dark");
            }
        }

        if (lightSwitch.checked) {
            lightSwitch.checked = false;
        }
        localStorage.setItem("lightSwitch", "light");
    }

    /**
     * @function onToggleMode
     * @summary: the event handler attached to the switch. calling @darkMode or @lightMode depending on the checked state.
     */
    function onToggleMode() {
        if (lightSwitch.checked) {
            darkMode();
        } else {
            lightMode();
        }
    }

    /**
     * @function getSystemDefaultTheme
     * @summary: get system default theme by media query
     */
    function getSystemDefaultTheme() {
        const darkThemeMq = window.matchMedia("(prefers-color-scheme: dark)");
        if (darkThemeMq.matches) {
            return "dark";
        }
        return "light";
    }

    function setup() {
        var settings = localStorage.getItem("lightSwitch");
        if (settings == null) {
            settings = getSystemDefaultTheme();
        }

        if (settings == "dark") {
            lightSwitch.checked = true;
        }

        lightSwitch.addEventListener("change", onToggleMode);
        onToggleMode();
    }

    setup();
})();
