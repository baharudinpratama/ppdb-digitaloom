const modalLoading = new bootstrap.Modal("#modal-loading");
const toast = new bootstrap.Toast("#toast");

document.getElementById("toast").addEventListener("hidden.bs.toast", () => {
  location.reload();
})

$("#table").DataTable({
    ordering: false,
    lengthChange: false,
    responsive: true
});

$(".btn-confirm").on("click", function() {
    const id = $(this).data("id");
    const status = $(".assign-status :selected").val();

    modalLoading.show();

    $.ajax({
        method: "POST",
        url: BASE_URL + "test/confirm",
        data: { id, status },
        dataType: "json",
        success: function (response) {
            if (response.success) {
                setTimeout(function () {
                    modalLoading.hide();
                    $("#toast-message").text(response.message);
                    toast.show();
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