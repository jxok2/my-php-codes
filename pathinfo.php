<form method="post" enctype="multipart/form-data">
<input type="file" name="uploadfile1"><br>
<input type="submit" value="submit">
</form>
<?php
header("Content-Type:text/html;charset=utf-8");
echo phpversion();
echo "<br>测试<br>";
var_dump(pathinfo("/resources/img/stock/wxb001/美景.png"));
var_dump(pathinfo("/a/b/c/d/filename.png"));
var_dump($_FILES);
