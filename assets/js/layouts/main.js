if (["payment", "test"].includes(ACTIVE_MENU)) {
    $("#selection-submenu").slideToggle();
}

if (["user", "rereg"].includes(ACTIVE_MENU)) {
    $("#rereg-submenu").slideToggle();
}

$("#selection-menu").on("click", function () {
    $("#selection-submenu").slideToggle();
});

$("#rereg-menu").on("click", function () {
    $("#rereg-submenu").slideToggle();
});