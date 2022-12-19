const Icon = {
	render(name){
		let arr = `.icon-chicken.icon-beef.icon-buger-and-soda.icon-big-crab.icon-fish.icon-salad.icon-salad2.icon-fish2`;
		arr.split(".").map(v => {
			$(name).append(`<span class="${v}" data-icon="${v}"></span>`);
		})
	}
}

// $(document).on('click', '.icon-wrapper span', function(event) {
// 	copyToClipboard($(this).attr("data-icon"));
// });
// function copyToClipboard(element) {
//   	var $temp = $("<input>");
//   	$("body").append($temp);
//   	$temp.val(element).select();
//   	document.execCommand("copy");
//   	$temp.remove();
// }