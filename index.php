<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutacja - Lo-Niepolomice</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="navbar">
        <h1>Zespół Szkół im. Ojca Świętego Jana Pawła II w Niepołomicach</h1>
    </div>
    <div class="container">
        <div class="about">
            <h2 class="step">Informacje ogólne:</h2>
            <form method="POST">
                <div class="input-form">
                    <label for="name">Imię:</label>
                    <input type="text" name="imie" required>
                </div>
                <div class="input-form">
                    <label for="lastname">Nazwisko</label>
                    <input type="text" name="nazwisko" required>
                </div>
                <div class="input-form">
                    <label for="points">Punkty</label>
                    <input type="number" name="punkty" min=0 max=200 required>
                </div>
                <div class="input-form">
                    <label for="profile1">Pierwszy wybór:</label>
                    <select name="wybor1" id="wybor1">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="TI">TI</option>
                        <option value="TP">TP</option>
                        <option value="TE">TE</option>
                        <option value="TR">TR</option>
                        <option value="THT">THT</option>
                        <option value="TOT">TOT</option>
                    </select>
                </div>
                <div class="input-form">
                    <label for="profile2">Drugi wybór:</label>
                    <select name="wybor2" id="wybor2">
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="TI">TI</option>
                        <option value="TP">TP</option>
                        <option value="TE">TE</option>
                        <option value="TR">TR</option>
                        <option value="THT">THT</option>
                        <option value="TOT">TOT</option>
                    </select>
                </div>
        </div>

        <div class="calculator">
            <div class="required_subjects">
                <h2 class="step">2. Oceny z przedmiotów</h2>
                <div class="input-form" id="polski">
                    <label for="polski">Polski</label>
                    <input type="number" name="polski" class="required_subject" min=2 max=6 required>
                </div>
                <div class="input-form" id="matematyka">
                    <label for="matematyka">Matematyka</label>
                    <input type="number" name="matematyka" class="required_subject" min=2 max=6 required>
                </div>
                <div class="input-form" id="angielski">
                    <label for="angielski">Angielski</label>
                    <input type="number" name="angielski" class="required_subject" min=2 max=6 required>
                </div>
                <div id="rs"></div>
            </div>
            <div class="exam">
                <h2 class="step">3. Wyniki z egazminu</h2>
                <div class="input-form" id="polski_exam">
                    <label for="polski">Polski</label>
                    <input type="number" name="polski_exam" id="polski_exam_input" min=0 max=100 required>
                </div>
                <div class="input-form" id="matematyka_exam">
                    <label for="matematyka">Matematyka</label>
                    <input type="number" name="matematyka_exam" id="matematyka_exam_input" min=0 max=100 required>
                </div>
                <div class="input-form" id="angielski_exam">
                    <label for="angielski">Angielski</label>
                    <input type="number" name="angielski_exam" id="angielski_exam_input" min=0 max=100 required>
                </div>
                <input type="button" value="Licz" id="licz_exam" onclick="calculate()">
            </div>
        </div>
        <input type="submit" name="submit" value="Wyślij" class="form_button">
        <div id="score"></div>
    </div>
    </form>
    <?php
        require_once('backend/config.php');
        if(isset($_POST['submit'])) {
            $name = $_POST['imie'];
            $lastname = $_POST['nazwisko'];
            $score = $_POST['punkty'];
            $class1 = $_POST['wybor1'];
            $class2 = $_POST['wybor2'];

            $sql = "INSERT INTO kandydaci (imie, nazwisko, klasa_wybor1, klasa_wybor2, punkty)
                VALUES ('$name', '$lastname', '$class1', '$class2', '$score')";
            if ($db->query($sql) === TRUE) {
                echo "<div class='success'>Pomyślnie wysłano zgłoszenie!</div>";
                } else {
                echo "Błąd: " . $sql . "<br>" . $db->error;
                }
        }
    
        $db->close();
    ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/calculator.js"></script>

</body>

</html>