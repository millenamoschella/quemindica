cardCulture.addEventListener("click", function () {
    document.getElementById("choosePost").classList.add("displayNone");
    document.getElementById("culturePost").classList.remove("displayNone");
});

backIconCulture.addEventListener("click", function () {
    document.getElementById("culturePost").classList.add("displayNone");
    document.getElementById("choosePost").classList.remove("displayNone");
});

cardService.addEventListener("click", function () {
    document.getElementById("choosePost").classList.add("displayNone");
    document.getElementById("servicePost").classList.remove("displayNone");
});

backIconService.addEventListener("click", function () {
    document.getElementById("servicePost").classList.add("displayNone");
    document.getElementById("choosePost").classList.remove("displayNone");
});

cardProduct.addEventListener("click", function () {
    document.getElementById("choosePost").classList.add("displayNone");
    document.getElementById("productPost").classList.remove("displayNone");
});

backIconProduct.addEventListener("click", function () {
    document.getElementById("productPost").classList.add("displayNone");
    document.getElementById("choosePost").classList.remove("displayNone");
});
