import "./bootstrap";

(function (listenerName = "app:scroll-to") {
    window.addEventListener(
        listenerName,
        (ev) => {
            ev.stopPropagation();
            const selector = ev?.detail?.query;
            if (!selector) return;
            const el = document.querySelector(selector);
            if (!el) return;
            try {
                el.scrollIntoView({
                    behavior: "smooth",
                });
            } catch (error) {
                console.error("Error scrolling to element:", error);
            }
        },
        false,
    );
})();
