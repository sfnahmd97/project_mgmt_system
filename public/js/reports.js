$(document).ready(function () {
    $("#project_id").on("change", function () {
        var projectId = $(this).val();
        $.ajax({
            url: "/reports/filter",
            type: "GET",
            data: {project_id: projectId,},
            success: function (data) {
                $("#report-results").html(data);
            },
        });
    });
});
