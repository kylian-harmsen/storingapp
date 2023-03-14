<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp / Meldingen / Nieuw</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>

    <div class="container">
        <h1>Nieuwe melding</h1>

        <form action="../backend/meldingenController.php" method="POST">
        
            <div class="form-group">
                <label for="attractie">Naam attractie:</label>
                <input type="text" name="attractie" id="attractie" class="form-input">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <!-- hier komt een dropdown -->
                <select name="type" id="type" class="form-input">
                    <option value=""> - kies je type - </option>
                    <option value="Achtbaan">Achtbaan</option>
                    <option value="Draaiende attractie">Draaiende attractie</option>
                    <option value="Kinderattractie">kinderattractie</option>
                    <option value="Restaurant, cafe ,etc">Restaurant, cafe ,etc</option>
                    <option value="Parkshow">Parkshow</option>
                    <option value="Waterattractie">Waterattractie</option>
                    <option value="Overig">Overig</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capaciteit">Capaciteit p/uur:</label>
                <input type="number" min="0" name="capaciteit" id="capaciteit" class="form-input">
            </div>
            <div class="form-groep">
                <label for=prioriteit>Prio:</label>
                <input type="checkbox" name="prioriteit" id="prioriteit">
            </div>    
            <div class="form-group">
                <label for="melder">Naam melder:</label>
                <input type="text" name="melder" id="melder" class="form-input">
            </div>
            <div class="form-groep">
                <label for="overig">Overige info:</label>
                <input type="textblock" name="overig" id="overig" class="form-input">
            </div>    
            
            <input type="submit" value="Verstuur melding">

        </form>
    </div>  

</body>

</html>
