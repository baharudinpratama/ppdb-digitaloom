$(document).ready(function () {
    loadForm("studentForm");

    $("#student-form").on("submit", function (e) {
        e.preventDefault();
        const formData = {};
        $(this).serializeArray().forEach(item => {
            formData[item.name.split("-").join("_")] = item.value;
        });

        localStorage.setItem("studentForm", JSON.stringify(formData));

        window.location.href = "/ppdb/register/parent";
    });
});

function loadForm(id) {
    const saved = JSON.parse(localStorage.getItem(id));
    if (!saved) return;

    for (const key in saved) {
        const fKey = key.split("_").join("-");

        const $el = $(`[name="${fKey}"]`);
        if ($el.length === 0) continue;

        const type = $el.attr("type");

        if (type === "radio") {
            $(`[name="${fKey}"][value="${saved[key]}"]`).prop("checked", true);
        } else if (type === "checkbox") {
            if ($el.length === 1) {
                $el.prop("checked", !!saved[key]);
            } else {
                if (Array.isArray(saved[key])) {
                    saved[key].forEach(val => {
                        $(`[name="${fKey}"][value="${val}"]`).prop("checked", true);
                    });
                }
            }
        } else {
            $el.val(saved[key]);
        }
    }
}
