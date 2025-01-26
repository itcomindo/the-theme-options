window.addEventListener("DOMContentLoaded", () => {
    var elem = document.querySelector("#flkpr");
    var flkty = new Flickity(elem, {
        // options
        cellAlign: "center",
        contain: true,
        prevNextButtons: false,
        pageDots: false,
        wrapAround: true,
        autoPlay: 5000,
    });
});
