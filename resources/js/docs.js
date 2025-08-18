import { $, $$ } from "@flexilla/utilities";
import { OverlayScrollbars } from "overlayscrollbars";

const initScrollbar = () => {
    const elements = $$("[data-hidden-scrollbar-s]");
    for (const element of elements) {
        OverlayScrollbars(element, {});
    }

    const sidebarTrigger = $("[data-sidebar-trigger]");
    const sidebar = $("[data-app-sidebar]");
    const overlay = $("[data-sidebar-overlay]");
    const closeBtn = $("[data-close-sidebar]");

    if (sidebarTrigger && sidebar) {
        const toggleSidebar = (action) => {
            const isOpen = action !== "open";
            sidebar.setAttribute("data-state", isOpen ? "close" : "open");
            overlay?.setAttribute("data-state", isOpen ? "close" : "open");
        };

        const openSidebar = () => {
            toggleSidebar("open");
        };
        const closeSidebar = () => {
            toggleSidebar("close");
        };
        sidebarTrigger.addEventListener("click", openSidebar);

        closeBtn?.addEventListener("click", closeSidebar);
        overlay?.addEventListener("click", closeSidebar);
    }
};

const initAllDocs = () => {
    initScrollbar();
};

initAllDocs();
document.addEventListener("livewire:navigated", initAllDocs);
