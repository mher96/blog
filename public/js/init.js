

$(document).ready(function() {
	$('.edit_cat').click(function(){
		var id = $(this).attr('data-id');
		var name = $(this).prevAll('a').text();
		// console.log($(this))
		// console.log($(this).prevAll('a'));
		// console.log(name);
		$('.mod').val(name);
		var action = $('.form_modal').attr('action');
		$('.form_modal').attr('action', action+'/'+id);
	})

	$('.del_cat').click(function(){
		// $('.form_modal').
		var input = $('.form_modal').children("input[name='_method']");
		input.val('DELETE');
		console.log(input);
	})
})