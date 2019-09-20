<?php
$page_title="ADD GAME *admin only*";
require_once 'includes/header2.php';
?>

<h2>Add a New Game</h2>
<form action="insertgames.php" method="post">
    <table>
        <tr>
            <td style="text-align: right; width: 100px">Title: </td>
            <td><input name="title" type="text" size="100" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Developer: </td>
            <td>
                <select name="dev_id">
                    <option value="1">B</option>
                    <option value="2">C</option>
                    <option value="3">D</option>
                    <option value="4">E</option>
                    <option value="5">F</option>
                    <option value="6">G</option>
                    <option value="7">H</option>
                    <option value="8">I</option>
                    <option value="9">J</option>
                    <option value="10">K</option>
                    <option value="11">L</option>
                    <option value="12">M</option>
                    <option value="13">N</option>
                    <option value="14">O</option>
                    <option value="15">P</option>
                    <option value="16">Q</option>
                    <option value="17">R</option>
                    <option value="18">S</option>
                    <option value="19">T</option>
                    <option value="20">U</option>
                    
                </select>    
            </td>
        </tr>
        <tr>
            <td style="text-align: right">Release Date:</td>
            <td>
                <input name="release_date" type="text"  required />
                <span style="font-size: small"></span>
            </td>
             <tr>
            <td style="text-align: right; width: 100px">Description: </td>
            <td>
             <textarea name="description" rows="4" cols="20">
             </textarea>
            </td>
            
        </tr>
        </tr>
            <td style="text-align: right">Platform:</td>
            <td>
                <select name="plat_id">
                    <option value="1">XBox</option>
                    <option value="2">PS4</option>
                    <option value="3">PC</option>
                    <option value="4">Nintendo</option>
                    <option value="5">Wii U</option>
                </select>
            </td>
        
        <tr>
            <td style="text-align: right">UPC: </td>
            <td><input name="upc" type="number" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Image: </td>
            <td><input name="image" type="text" size="100" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Twitch: </td>
            <td><input name="twitch" type="text" size="100" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Price: </td>
            <td><input name="price" type="number" step="0.01" required /></td>
        </tr>
        
    </table>
    <div>
        <input type="submit" value="Add Game" />
        <input type="button" value="Cancel" onclick="window.location.href='listgames.php'" />
    </div>
</form>

<?php
require_once 'includes/footer2.php';
