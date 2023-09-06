<?php
$pageTitle = "Post";
include "view-header.php";
?>
    <div class="container">
    <h1>Post</h1>

<form method="post" action="post-result.php">
    <input type="text" name="my-name">
    <input type="submit" value="Post Data">
</form>
    </div>
<?php
include "view-footer.php";
?>