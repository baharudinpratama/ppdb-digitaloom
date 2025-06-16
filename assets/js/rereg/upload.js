["photo", "nisn", "birth-cert", "kk", "skl"].forEach(tag => {
    $(`#${tag}-file-btn`).on("click", function () {
        $(`#${tag}-file`).click();
    });

    $(`#${tag}-file`).on("change", function () {
        const file = $(this)[0].files[0];
        $(`#${tag}-file-name`).text("• " + file.name);
    });
});

$("#upload-form").submit(function (event) {
    event.preventDefault();

    const formData = new FormData();
    formData.append("id", $("#student-id").val());

    ["photo", "nisn", "birth-cert", "kk", "skl"].forEach(tag => {
        const file = $(`#${tag}-file`)[0].files[0];
        formData.append(`${tag}`, file);
    });

    $.ajax({
        method: "POST",
        url: BASE_URL + "rereg/upload_submit",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                setTimeout(function () {
                    window.location.href = "/ppdb/rereg/pay";
                }, 1000);
            } else {
                setTimeout(function () {
                    modalLoading.hide();
                    alert(response.message);
                }, 1000);
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                modalLoading.hide();
                alert("Terjadi kesalahan.");
            }, 1000);
        }
    });
});