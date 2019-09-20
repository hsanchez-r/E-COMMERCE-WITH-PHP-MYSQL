<?php
$page_title="TRY AGAIN";
require_once 'includes/header2.php';

$error = 'Default error.';
if (isset($_GET['m'])) {
    $error = trim($_GET['m']);
}
?>
<h2>Error</h2>

<table>
    <tr>
        <td style="text-align: left; vertical-align: top;">
            <h3>Sorry, but an error has occurred.</h3>
            <div style="color: red">
                <?= $error ?>
            </div>
            <br>
        </td>
    </tr>
</table>
<br><br><br><br><br>
<?php
require_once 'includes/footer2.php';

