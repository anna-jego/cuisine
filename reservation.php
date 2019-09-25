<!DOCTYPE html>
<html>

<head>
    <title>reservation</title>
    <script type="text/javascript" src="form.js"></script>
    <link rel="stylesheet" type="text/css" href="restaurant style.css">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
</head>

<body>

    <?php
    require 'db.php';
    include 'header.html';
    ?>

    <div class="box">
        <div class="col">
            <h2>NOUS CONTACTER</h2><br>
            On peut faire une reservation ici.Tapper les details dans le message. <br>
            Nom*:<br>
            <input type="text" id="nom"><br>
            Email*:<br>
            <input type="text" id="email"><br>
            Téléphone/Mobile:<br>
            <input type="text" id="phone"><br>
            Adresse complète:<br>
            <input type="text" id="adresse"><br>
            Message*:<br>
            <textarea rows="5" cols="80" id="message"></textarea>
            <!-- validation time NB: NOT YET DONE ADRESS-->
            <div class="submitbutton" onclick="(validate(); phpTime() && (<?php validateReservation(document . getElementById('nom') . value, document . getElementById('email') . value, document . getElementById('phone') . value, document . getElementById('adresse') . value, document . getElementById('message') . value); ?>)">
                SOUMETTRE</div><br>
            Les objects marquent avec * sont obligatoires
        </div>

        <!-- reservation "calendar"" -->
        <div class="col">

            <div class="mois">
                <select id="month">
                    <option value="0">Mois</option>
                    <option value="1">Janvier</option>
                    <option value="2">Fevrier</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Decembre</option>
                </select>
                <div class="submitbutton" onclick="getOption();">SOUMETTRE</div>
                <div class="submitbutton" onclick="rechargez();">RECHARGEZ</div>
                <br><br>
                <!-- c'est ici (le calendrier) -->
                <table style="border" , "2">
                    <tr>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mecredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                        <th>Dimanche</th>
                    </tr>
                </table>
                <p id="target"></p>
            </div>
        </div>
    </div>

    <br>

    <!-- restaurant info at the end -->
    <div class="box">
        <div class="col">
            <h2>Restaurant</h2><br>
            <div class="h4">Horaires:</div><br>
            <div class="info">
                Lundi 12h00 - 15h00 | 18h00 - 22h00<br>
                Mardi 12h00 - 15h00 | 18h00 - 22h00<br>
                Mecredi 12h00 - 15h00 | 18h00 - 22h00<br>
                Jeudi 12h00 - 15h00 | 18h00 - 22h00<br>
                Vendredi 12h00 - 15h00 | 18h00 - 22h00<br>
                Samedi 18h00 - 22h00<br>
                Dimanche Fermé</div><br><br>
            <div class="h4">Addresse:</div><br>
            <div class="info"> 1 Rue du Rue, Oloron, 64400</div><br><br>
            <div class="h4">Téléphone:</div><br>
            <div class="info"> 07 45 32 12 12</div><br><br>
            <!--if need more space for writing-->
                    <h2>Info:</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum. </p> -->
        </div>
        <div class=col>
            <!-- next is the picture to accompany the restaurant of its location-->
            <div class="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11640.427626795989!2d-0.5922183767211912!3d43.16528006453391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd57aaa825366a05%3A0xb506d2df70e58431!2zTWljcm8gTcOpY2FuaXF1ZSBQeXLDqW7DqWVubmU!5e0!3m2!1sen!2sfr!4v1568901104483!5m2!1sen!2sfr" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

    <?php
    include 'footer.html';
    ?>

    <script type="text/javascript">
        function phpTime {
            if (validate()) {
                <?php
                validateReservation(document . getElementById('nom') . value, document . getElementById('email') . value, document . getElementById('phone') . value, document . getElementById('adresse') . value, document . getElementById('message') . value);
                ?>
            }
        }
    </script>
</body>

</html>