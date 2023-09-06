<?php
$pageTitle = "Post";
include "view-header.php";
?>
    <div class="container">
    <h1>Post</h1>

    </div>
<form method="post" action="post-result.php">
    <input type="text" name="my-name">
    <input type="submit" value="Post Data">
</form>
<?php
include "view-footer.php";
?>