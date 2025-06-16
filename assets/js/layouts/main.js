if (["payment", "test"].includes(ACTIVE_MENU)) {
    $("#selection-submenu").slideToggle();
}

if (["user", "re-reg"].includes(ACTIVE_MENU)) {
    $("#re-reg-submenu").slideToggle();
}

$("#selection-menu").on("click", function () {
    $("#selection-submenu").slideToggle();
});

$("#re-reg-menu").on("click", function () {
    $("#re-reg-submenu").slideToggle();
});