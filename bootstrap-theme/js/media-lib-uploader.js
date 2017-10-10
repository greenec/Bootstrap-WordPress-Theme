jQuery(document).ready(function($) {
	// Uploading files
	var file_frame;

	function mediaUploader(e, preview, formInput) {
		e.preventDefault();
		file_frame = null;

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Select a image to upload',
			button: {
				text: 'Use this image',
			},
			multiple: false	// Set to true to allow multiple files to be selected
		});
		
		// When an image is selected, run a callback.
		file_frame.on('select', function() {
			// We set multiple to false so only get one image from the uploader
			attachment = file_frame.state().get('selection').first().toJSON();
			// Do something with attachment.id and/or attachment.url here
			preview.attr('src', attachment.url).css('width', 'auto');
			formInput.val(attachment.id);
		});

		// Finally, open the modal
		file_frame.open();
	}

	$('#upload_logo_button').on('click', function(e) {
		mediaUploader( e, $('#logo-preview'), $('#logo_attachment_id') );
	});

	$('#upload_background_button').on('click', function(e) {
		mediaUploader( e, $('#background-preview'), $('#background_attachment_id') );
	});

	$('#upload_favicon_button').on('click', function(e) {
		mediaUploader( e, $('#favicon-preview'), $('#favicon_attachment_id') );
	});
});
