<?php
$pageTitle = "Get Result";
include "view-header.php";
?>
   <div class="container">
    <h1>Get Result</h1>

<?php
if (isset($_GET['my-name1'])) {
    ?>
    <p>The value sent is:</p>
    <?php
    echo $_GET['my-name1'];
} else {
    ?>
    <p>Nothing getted to the page.</p>
    <?php
}
?> </div> <?php
include "view-footer.php";
?>