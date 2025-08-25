import { $, $$ } from "@flexilla/utilities";
import { OverlayScrollbars } from "overlayscrollbars";
import { actionToggler } from "@flexilla/utilities/toggler";

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

const initTabOfContent = () => {
    const tabOfContentMob = $("[data-table-of-content]");
    const trigger = $("[data-trigger-tab-content]");
    if (tabOfContentMob && trigger) {
        // Define the functions before using them
        let actionTab; // Declare actionTab variable first

        const hideTabOfContent = () => {
            actionTab.toInitial();
        };

        const hideOnClickOutSide = (ev) => {
            if (!trigger.contains(ev.target)) {
                actionTab.toInitial();
            }
        };

        actionTab = actionToggler({
            trigger,
            targets: [
                {
                    element: tabOfContentMob,
                    attributes: {
                        initial: { "data-state": "close" },
                        to: { "data-state": "open" },
                    },
                },
            ],
            onToggle: ({ isExpanded: isOpened }) => {
                document.body.classList[isOpened ? "add" : "remove"](
                    "hidden-scrollbar"
                );
                if (isOpened) {
                    document.addEventListener("click", hideOnClickOutSide);
                    tabOfContentMob.addEventListener("click", hideTabOfContent);
                } else {
                    document.removeEventListener("click", hideOnClickOutSide);
                    tabOfContentMob.removeEventListener(
                        "click",
                        hideTabOfContent
                    );
                }
            },
        });
    }
};

const initAllDocs = () => {
    initScrollbar();
    initTabOfContent();
};

initAllDocs();
document.addEventListener("livewire:navigated", initAllDocs);
