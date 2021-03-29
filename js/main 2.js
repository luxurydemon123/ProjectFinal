document.addEventListener("DOMContentLoaded", function(event) {
	
	
	

	$('.add-course').click(function(event) {
		$('.container-add-course').addClass('show');
	});
	$('.btn-exit').click(function(event) {
		$('.container-add-course').removeClass('show');
	});

	$('.btn-add-course').click(function(event) {
		$title = $('.title-course').val();
		console.log($title);
		
		
	});
	$('.btn-save').click(function(event) {
		$('.form-edit').submit();
	});


	$('.btn-add-lesson').click(function(event) {
		$('.form-add-lesson').submit();
	});

	$('.btn-code').click(function(event) {
		$('.form-add-code').submit();
	});

	$('.btn-docs').click(function(event) {
		$('.form-add-documents').submit();
	});

	

	$('.btn-edit').click(function(event) {
		var title = $(this).parent().prev().prev().text();
		var image = $(this).parent().parent().prev().attr("src");
		var id = $(this).parent().parent().prev().prev().val();
		console.log(id);
		$('.image-course1').attr('src', image);
		$('.title-edit').val(title);
		$('.id-edit').val(id);
		$('.image-course2').val(image);
	});

	$('.btn-edit-detail').click(function(event) {
		var title_edit = $(this).parent().prev().prev().prev().text();
		var youtube_edit = $(this).parent().prev().prev().prev().text();
		var file_upload2 = $(this).parent().prev().children('').attr("href");
		var id_edit = $(this).next().next().val();
		var type = $(this).next().next().next().val(); 

		$('.type').val(type);
		$('.id-edit').val(id_edit);
		$('.youtube-edit').val(youtube_edit);
		$('.title-edit').val(title_edit);
		$('.file-upload2').val(file_upload2);
		
	});
});