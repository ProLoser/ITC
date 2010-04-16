$(function() {
	$(".php").selectable({
		filter: 'li',
		stop: function(){
			var first = $("#select-first").val("");
			var last  = $("#select-last").val("");
			$(".ui-selected", this).each(function(){
				var index = $(".php li").index(this);
				index += 1;
				last.val(index);
				if (first.val() == "") {
					first.val(index);
				}
			});
		}
	});
	// Modal Box
	$('#feedback').dialog();
	// Tabs
	$(".tabs").tabs();
});

