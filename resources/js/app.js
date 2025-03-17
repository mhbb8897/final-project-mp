import jQuery from 'jquery';

// Pastikan jQuery tersedia di window
window.$ = window.jQuery = jQuery;

$(document).ready(function () {
    console.log("✅ jQuery berhasil dimuat!");

    // Tes event klik pada tombol
    $("#testButton").on("click", function () {
        alert("🔥 Tombol diklik! jQuery bekerja dengan baik.");
    });

    // Tes manipulasi DOM
    $("#testDiv").text("✅ jQuery berhasil mengubah teks!");
});
