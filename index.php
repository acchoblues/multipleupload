<html>
<head>  
<title>Multiple upload image | www.hakkoblogs.com</title> 
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>
 
<body>
 
<!-- 3 -->
<form action="upload.php" method="post" class="dropzone" enctype="multipart/form-data">
 
</form>
</form>
<script>
$(“.dropzone”).dropzone({
init: function() {

this.on(“success”, function(file) {

var ext = checkFileExt(file.name);
var newimage = “”;

// Check extension
if(ext != ‘png’ && ext != ‘jpg’ && ext != ‘jpeg’){
newimage = “upload/logo.jpg”;
}

this.createThumbnailFromUrl(file, newimage);
});
}
});

// Get file extension
function checkFileExt(filename){

filename = filename.toLowerCase();
return filename.split(‘.’).pop();
}  

</script>
</body>
 
</html>