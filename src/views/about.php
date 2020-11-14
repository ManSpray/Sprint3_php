<?php
print('<div class="container"><h1>About us page</h1></div>');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editor</title>
    <link rel="stylesheet" type="text/css" href="lib/codemirror/lib/codemirror.css">
    <link rel="stylesheet" type="text/css" href="lib/codemirror/theme/ambiance.css">
    <script src="lib/jQuery/jQuery.js"></script>
    <script src="lib/codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="editor-action.js"></script>
    <script src="lib/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="lib/codemirror/mode/xml/xml.js"></script>
    <script src="lib/codemirror/mode/javascript/javascript.js"></script>
    <script src="lib/codemirror/mode/css/css.js"></script>
    <script src="lib/codemirror/mode/clike/clike.js"></script>
    <script src='lib/codemirror/mode/php/php.js'></script>
    <script src='lib/codemirror/addon/selection/active-line.js'></script>
    <script src='lib/codemirror/addon/edit/matchbrackets.js'></script>
</head>
<body>
<div class="row" style="display:flex;justify-content: center;">
    <textarea class="codemirror-textarea" id="ed_code"></textarea>
    <div class="app-row">
        <button class="btn-action" id="run">Run</button>
        <button class="btn-action" id="clear">Clear</button>
        <button class="btn-action" id="refresh">Refresh</button>
    </div>
</div>
<div class="app-row">	
  <div id="result"></div>
</div>	
<script type="text/javascript">
	$(document).ready(function() {
		var codeEditorElement = $(".codemirror-textarea")[0];
		var editor = CodeMirror.fromTextArea(codeEditorElement, {
			mode : "application/x-httpd-php",
			lineNumbers : true,
			matchBrackets : true,
			theme : "ambiance",
			lineWiseCopyCut : true,
			undoDepth : 200
		});
	});
</script>  
</body>

</html>
