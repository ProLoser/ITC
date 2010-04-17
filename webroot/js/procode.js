$(function() {
	$("#geshi ol").selectable({
		filter: 'li',
		stop: function(){
			var first = $("#select-first").val("");
			var last  = $("#select-last").val("");
			$(".ui-selected", this).each(function(){
				var index = $("#geshi li").index(this);
				index += 1;
				last.val(index);
				if (first.val() == "") {
					first.val(index);
				}
			});
			$('#feedback').dialog("open");
		}
	});
	// Modal Box
	$('#feedback').dialog({ autoOpen: false });
	// Tabs
	$(".tabs").tabs();
});

