<link rel="stylesheet" href="assets/bower_dl/css/editormd.css" />
<script src="assets/bower_dl/examples/js/jquery.min.js"></script>
<script src="assets/bower_dl/editormd.js"></script>

<script type="text/javascript">
$(function() {
    var testEditor = editormd("test-editormd", {
        path : 'assets/bower_dl/lib/'
    });
});
</script>

<div class="container">
	<form action='articleAddDo' method="post">
    <div id="test-editormd">
        <textarea id="content" name="content" class="form-control" rows="14">{{ $content }} </textarea>
    </div>

    <input type="submit" value="Save" >

    </form>
</div>
