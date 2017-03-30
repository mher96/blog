

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

	// $('.del_cat').click(function(){
	// 	// $('.form_modal').
	// 	var input = $('.form_modal').children("input[name='_method']");
	// 	input.val('DELETE');
	// 	console.log(input);
	// })

	// $('.add_post').click(function(){
	// 	test = $('.form_modal').children('[name="_method"]');
	// 	$('.form_modal').children('[name="name"]').val('');
	// 	$('.form_modal').children('[type="submit"]').val('Add')
	// 	test.remove();
	// 	console.log(test);
	// })
	$('.del_cat_i').click(function(){
		var id = $(this).attr('data-id');
		var action = $('.form_del_catl').attr('action');
		console.log(action);
		console.log(id);
		// return false;
		$('.form_del_catl').attr('action', action+'/'+id);
		$('.del_cat').trigger('click');
		alert('ok')
	})
})