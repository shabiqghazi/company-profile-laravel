const header = document.querySelector("header");
const featured = document.querySelector("#featured");
const navBrand = document.querySelector("#nav-brand");
let prevPosition = header.style.position;
const navOpen = document.getElementById("nav-open");
const navClose = document.getElementById("nav-close");
const navCollapse = document.getElementById("nav-collapse");
const body = document.querySelector("body");

window.addEventListener("scroll", () => {
    if (window.scrollY < header.clientHeight) {
        header.style.position = "absolute";
        header.style.top = "0px";
        prevPosition = "absolute";
    } else if (
        window.scrollY >= header.clientHeight &&
        window.scrollY < featured.clientHeight
    ) {
        header.style.boxShadow = "unset";
        header.style.backgroundColor = "unset";
        navCollapse.style.color = "#fff";
        navBrand.style.color = "#fff";
        header.style.top = "-80px";
        navOpen.style.color = "#fff";
    } else {
        prevPosition = "fixed";
        header.style.top = "0px";
        header.style.position = "fixed";
        header.style.backgroundColor = "#fff";
        header.style.boxShadow = "1px 1px 10px -3px #00000033";
        navCollapse.style.color = "#0E8388";
        navOpen.style.color = "#0E8388";
        navBrand.style.color = "#0E8388";
    }
});

navOpen.addEventListener("click", () => {
    navCollapse.style.right = "0px";
    body.style.overflow = "hidden";
    navCollapse.style.color = "#0E8388";
});
navClose.addEventListener("click", () => {
    navCollapse.style.right = "100%";
    body.style.overflow = "auto";
});
