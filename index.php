<html>
	<head>
	</head>
	<body>
<?
	echo "Hello";
?>
				<div id="editor">
				</div>
	</body>
	<script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
	<script src="ckfinder.js"></script>	
	<script>
	window.onload = function() {
		var editorElement = CKEDITOR.document.getById( 'editor' );
		var editor = CKEDITOR.replace( 'editor' ,{
		     filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		     filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
		     filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		     filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
 		})
		CKFinder.setupCKEditor( editor )
    }
	</script>
</html>


