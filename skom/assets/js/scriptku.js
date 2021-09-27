$(document).ready(function () {
	$("#upfile_laporan").on("show.bs.modal", function (event) {
		var div = $(event.relatedTarget);
		var modal = $(this);

		modal.find("#file_laporan").attr("value", div.data("file_laporan"));
	});
});
