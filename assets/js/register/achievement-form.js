const dbName = "StudentFormDB";
const fileStore = "fileUploads";
let db;

const request = indexedDB.open(dbName, 1);

request.onupgradeneeded = function (e) {
    db = e.target.result;
    if (!db.objectStoreNames.contains(fileStore)) {
        db.createObjectStore(fileStore, { keyPath: "id" });
    }
};

request.onsuccess = function (e) {
    const db = e.target.result;

    const tx = db.transaction("fileUploads", "readonly");
    const store = tx.objectStore("fileUploads");

    const getReq = store.get("achievementFiles");

    getReq.onsuccess = function () {
        const result = getReq.result;

        if (!result) {
            localStorage.setItem("achievementFileNames", JSON.stringify([]));
        }
    };

    getReq.onerror = function () {
        console.error("Failed to fetch achievementFiles.");
    };

    loadForm("achievementForm");
};

$("#achievement-file").on("change", function () {
    window._achievementFiles = Array.from(this.files);

    const names = window._achievementFiles.map(f => f.name);
    $("#achievement-file-name").html(
        `<ul>${names.map(name => `<li>${name}</li>`).join("")}</ul>`
    );
});

$("#achievement-form").on("submit", function (e) {
    e.preventDefault();

    const formData = {};
    $(this).serializeArray().forEach(item => {
        formData[item.name] = item.value;
    });

    localStorage.setItem("achievementForm", JSON.stringify(formData));

    if (window._achievementFiles && window._achievementFiles.length > 0) {
        const tx = db.transaction(fileStore, "readwrite");
        const store = tx.objectStore(fileStore);
        store.put({ id: "achievementFiles", files: window._achievementFiles });

        const fileNames = window._achievementFiles.map(f => f.name);
        localStorage.setItem("achievementFileNames", JSON.stringify(fileNames));
    }

    window.location.href = "/ppdb/register/confirmation";
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

    const fileNames = JSON.parse(localStorage.getItem("achievementFileNames"));
    if (fileNames?.length) {
        $("#achievement-file-name").html(
            `<ul>${fileNames.map(name => `<li>${name}</li>`).join("")}</ul>`
        );
    }
}

$(document).on("click", "#achievement-file-btn", function () {
    $("#achievement-file").click();
});
