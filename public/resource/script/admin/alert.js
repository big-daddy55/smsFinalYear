
window.onload = function () {
    setTimeout(function () {
        var alert = document.getElementById("alert");

        if (alert) {
            alert.style.opacity = "0";

            setTimeout(function () {
                alert.style.display = "none";
            }, 1000)
        }
    }, 3000)
};