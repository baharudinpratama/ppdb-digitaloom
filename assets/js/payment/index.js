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

    $.ajax({
        method: "POST",
        url: BASE_URL + "payment/confirm",
        data: { id },
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