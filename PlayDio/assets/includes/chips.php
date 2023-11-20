<div class="chips-container">
    <div class="chip-arrow-icon">
        <div class="chip-icon-left" id="left">&#8249;</div>
    </div>
    <div class="chip-box">
        <a href="#" class="chip chip-explore">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-edge" width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="var(--black)" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M20.978 11.372a9 9 0 1 0 -1.593 5.773" />
                <path d="M20.978 11.372c.21 2.993 -5.034 2.413 -6.913 1.486c1.392 -1.6 .402 -4.038 -2.274 -3.851c-1.745 .122 -2.927 1.157 -2.784 3.202c.28 3.99 4.444 6.205 10.36 4.79" />
                <path d="M3.022 12.628c-.283 -4.043 8.717 -7.228 11.248 -2.688" />
                <path d="M12.628 20.978c-2.993 .21 -5.162 -4.725 -3.567 -9.748" />
            </svg>
        </a>
        <a href="#" class="chip active">All</a>
        <a href="#" class="chip newtoyou">
            <span>
                New To You
            </span>
        </a>
        <a href="#" class="chip">Coding</a>
        <a href="#" class="chip">Pakistan</a>
        <a href="#" class="chip">Comedy</a>
        <a href="#" class="chip">Karachi</a>
        <a href="#" class="chip">Cricket</a>
        <a href="#" class="chip">Muslim</a>
        <a href="#" class="chip">Elections</a>
        <a href="#" class="chip">Gaming</a>
        <a href="#" class="chip">Snooker</a>
        <a href="#" class="chip">Football</a>
        <a href="#" class="chip">Youtuber</a>
        <a href="#" class="chip">Vlogging</a>
        <a href="#" class="chip">New To you</a>
    </div>
    <div class="chip-arrow-icon">
        <div class="chip-icon-right">&#8250;</div>
    </div>
</div>

<!-- Drag Functionality -->
<script>
    const tabsBox = document.querySelector(".chip-box"),
        allTabs = document.querySelectorAll(".chip"),
        arrowIcons = document.querySelectorAll(".chip-arrow-icon div");

    let isDragging = false;

    const handleIcons = (scrollVal) => {
        let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
        arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
        arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
    }

    arrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
            let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
            handleIcons(scrollWidth);
        });
    });

    allTabs.forEach(tab => {
        tab.addEventListener("click", () => {
            tabsBox.querySelector(".active").classList.remove("active");
            tab.classList.add("active");
        });
    });

    const dragging = (e) => {
        if (!isDragging) return;
        tabsBox.classList.add("dragging");
        tabsBox.scrollLeft -= e.movementX;
        handleIcons(tabsBox.scrollLeft)
    }

    const dragStop = () => {
        isDragging = false;
        tabsBox.classList.remove("dragging");
    }

    tabsBox.addEventListener("mousedown", () => isDragging = true);
    tabsBox.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
</script>