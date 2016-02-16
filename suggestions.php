<?php
/**
 * Created by PhpStorm.
 * User: seamusokirwan
 * Date: 2/16/16
 * Time: 12:30
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>SnaFoo - Suggestions</title>
</head>
<body>
    <header>
        <h1>Suggestions</h1>
        <ul>
            <li><a href="index.php">Voting</a></li>
            <li><a href="suggestions.php">Suggestions</a></li>
            <li><a href="shopping.php">Shopping List</a></li>
        </ul>
    </header>
    <main>
        <h3>Suggestions a Snack to be purchased</h3>
        <form>
            <label for="suggestPrevItem">Suggest from previous item list</label>
            <select name="suggestPrevItem" id="suggestPrevItem">
                <option>Snack Item from API</option>
                <option>Snack Item from API</option>
                <option>Snack Item from API</option>
                <option>Snack Item from API</option>
                <option>Snack Item from API</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        <form>
            <label for="suggestNewItem">Suggest a new Item</label>
            <input type="text" name="suggestNewItem" id="suggestPrevItem">
            <label for="whereToBuy">Where can we buy this item?</label>
            <input type="text" name="whereToBuy" id="whereToBuy">
            <button type="submit">Submit</button>
        </form>

    </main>
</body>
</html>
