$(function() {
	$(".php").selectable({
		stop: function(){
			var first = $("#select-first").empty();
			var last  = $("#select-last").empty();
			$(".ui-selected", this).each(function(){
				var index = $(".php li").index(this);
				index += 1;
				if (index != 0) {
					last.value(index);
				}
				if (first.value() == "" && index != 0) {
					first.value(index);
				}
			});
		}
	});
	// Modal Box
	$('#feedback').dialog();
	// Tabs
	$(".tabs").tabs();
});