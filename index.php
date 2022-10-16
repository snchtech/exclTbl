<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="#content-1" class="accordion-toggle">Звіт по формі 21</a>
<div class="accordion-content" id="content-1">
    <form method="POST" id="report-form" class="report-constructor" action="">

    

        <fieldset>
            <legend>Параметри звіту</legend>

            <label for="datefrom">В період з:</label>
            <input type="date" id="datefrom" name="datefrom" value="">
            
            <label for="dateto">До:</label>
            <input type="date" id="dateto" name="dateto" value="">

            <input id="submit-form" type="submit" value="Завантажити">
        </fieldset>

        <div class="form-error"></div>

        <fieldset>
            <legend>Звіт по формі 21 таблиця 1 (за замовчуванням період звіту 2 роки)</legend>
            <input type="radio" id="form21t1" name="form21" value="form21t1" required="required">
            <label for="form21t1">Загальний звіт</label><br>
            <p>1 співробітник 1 рядок</p>
            
            <p><strong>Звіт за частинами</strong></p>
            <input type="radio" id="form21t1p1" name="form21" value="form21t1p1">
            <label for="form21t1p1">Звіт форма 21 таблиця 1 ч.1</label><br>

            <input type="radio" id="form21t1p2" name="form21" value="form21t1p2">
            <label for="form21t1p2">Звіт форма 21 таблиця 1 ч.2</label><br>
        </fieldset>

        <fieldset>
            <legend>Звіт по формі 21 таблиця 2 (за замовчуванням період звіту 4 роки)</legend>
            <input type="radio" id="form21t2" name="form21" value="form21t2">
            <label for="form21t2">Загальний звіт</label><br>
            <p>1 співробітник 1 рядок</p>
            
            <p><strong>Звіт за частинами</strong></p>
            <input type="radio" id="form21t2p1" name="form21" value="form21t2p1">
            <label for="form21t2p1">Звіт форма 21 таблиця 1 ч.1</label><br>

            <input type="radio" id="form21t2p2" name="form21" value="form21t2p2">
            <label for="form21t2p2">Звіт форма 21 таблиця 1 ч.2</label><br>
        </fieldset>
    </form>
</div>
<a href="#content-2" class="accordion-toggle">Звіт по формі 20</a>
<div class="accordion-content" id="content-2">

    <form method="POST" id="report-form" action="handlers/form20.php">
        <div class="form-error"></div>

        <fieldset>
            <legend>Звіт по формі 20</legend>
            <input id="submit-form" type="submit" value="Завантажити">
        </fieldset>
    </form>
</div>
    

<script src="main.js"></script>
<script src="form.js"></script>
</body>
</html>