<?php
$page_title="SEARCH GAME CNTRL";
include ('includes/header2.php');
?>
<h2>Search Games</h2>
<p>Enter one or more words in games title.</p>
<form action="searchgamesresult.php" method="get">
    <input type="text" name="terms" size="40" required />&nbsp;&nbsp;
    <input type="submit" name="Submit" id="Submit" value="Search Games" />
</form>
<?php
include ('includes/footer2.php');