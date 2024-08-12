$(document).ready(function () {
    $("#project_id").on("change", function () {
        var projectId = $(this).val();
        if (projectId) {
            $.ajax({
                url: "/get-tasks/" + projectId,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $("#task_id").empty();
                    $("#task_id").append(
                        '<option value="" disabled selected>Select a task</option>'
                    );
                    $.each(data, function (key, value) {
                        $("#task_id").append(
                            '<option value="' +
                                value.id +
                                '">' +
                                value.name +
                                "</option>"
                        );
                    });
                },
            });
        } else {
            $("#task_id").empty();
        }
    });
});
