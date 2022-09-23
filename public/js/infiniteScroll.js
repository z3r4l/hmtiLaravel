let page = 1;
$(window).scroll(function () {
    if ($(window).scrollTop() > $(document).height() - $(window).height() * 2) {
        page++;
        loadMoreData(page);
    }
});

function loadMoreData(page) {
    $.ajax({
        url: "?page=" + page,
        type: "get",
        beforeSend: function () {
            $(".ajax-load").show();
        },
    })
        .done(function (data) {
            if (data.html == "") {
                $(".ajax-load").html("Anda Sudah Melihat Semua Kegiatan Kami");
                return;
            }
            $(".ajax-load").hide();
            $("#post-data").append(data.html);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert("server not responding...");
        });
}
