document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.getElementById("intro").style.display = "none";
        document.getElementById("main-content").classList.remove("hidden");
    }, 5000);
});
