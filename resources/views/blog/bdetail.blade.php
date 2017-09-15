<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<link rel="stylesheet" href="assets/bower_dl/css/editormd.css" />
<script src="assets/bower_dl/examples/js/jquery.min.js"></script>

	<script src="assets/bower_dl/lib/marked.min.js"></script>
	<script src="assets/bower_dl/lib/prettify.min.js"></script>
	<script src="assets/bower_dl/lib/raphael.min.js"></script>
	<script src="assets/bower_dl/lib/underscore.min.js"></script>
	<script src="assets/bower_dl/lib/sequence-diagram.min.js"></script>
	<script src="assets/bower_dl/lib/flowchart.min.js"></script>
	<script src="assets/bower_dl/lib/jquery.flowchart.min.js"></script>

<script src="assets/bower_dl/editormd.js"></script>
</head>
<body>
	<div id="test-editormd">
		<textarea id="content" name="content" class="form-control" rows="14">{{ $bDetail["content"] }} </textarea>
	</div>

</body>

<script>
	$(function() {
		var mTxt	= $("#content").val();
		//var testEditor = editormd("test-editormd", {
		//	path : 'assets/bower_dl/lib/'
		//});


		var testEditor =  editormd.markdownToHTML("test-editormd", {
			htmlDecode      : "style, script, iframe",	// you can filter tags decode
			emoji           : true,
			taskList        : true,
			tex             : true,  // 默认不解析
			flowChart       : true,  // 默认不解析
			sequenceDiagram : true,  // 默认不解析
		});

	});
</script>

</html>