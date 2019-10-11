<!DOCTYPE html>
<html> 
<head>
  
<!-- en-tête de la page -->
<meta charset="UTF-8">
  <title>La fabrique du petit manger</title>
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    
        <link rel="stylesheet" href="reservations.css">
<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
</head>

<body>

  <header>
  
  <nav>
    
<ul class="navbar">
<li><a href="acceuil.html">Acceuil</a></li>
<li><a href="nosrecettes.html">Nos recettes</a></li>
<li><a href="reservations.php">Réservations</a></li>
<li><a href="livredor.php">Le livre d'or</a></li>
</ul>
  
  </nav>
  </header>



  <div id="header" class=section>
    <h1>La fabrique du petit manger</h1>
    <h2>Des produits locaux et de nouvelles recettes tous les jours !
    </h2>


<hr align="center" width="absolue" color="black" size="10"> 

 

 <h3>Vous souhaitez réservez ?</h3>



 <!--boite coordonnées-->
<center>
 <h4>CONTACT PAR EMAIL</h4>
              <h5> Nous vous enverons une confirmation de reservation dans les plus brefs delais !</h5>
              <p>C'est parti !</p>
</center>








<center>

              <!--FORMUALIRE DE RESERVATION-->

   

            <form action="reserv.php" method="POST">

                <label for="dede">Nom</label><br>
                <input type="text" name="nom" id="dede"><br>

                <label for="dede">Prénom</label><br>
                <input type="text" name="prenom" id="dede"><br>


                <label for="dede">numéro</label><br>
                <input type="text" name="numero" id="dede"><br>

                <label for="dede">mail</label><br>
                <input type="text" name="mail" id="dede"><br>

             
                <label for="dede">adresse</label><br>
                <input type="text" name="adresse" id="dede"><br>


               
                <label for="dede">date</label><br>
               

       <input type="date" name="Jour"><br>
        <input type="time" name="heure"><br>
        <select name="convives" size="1">
            <option>Nbre de convives</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
        </select>


                <button type="submit">ENVOYER</button>
            </form>





        </script>




    </form>
             


              <h4>CONTACT PAR TELEPHONE</h4>
              <h5>Contactez nous aussi par téléphone au <p>06 54 67 12 23</p>.</h5>
            </form>
     </div>
     </center>














<!--boite coordonnées-->



</body>


<footer>



 <div id="menu">



                <ul>
                    <li><a href="#">S'inscrire</a></li>
                    <li><a href="#">Se connecter</a></li>
                </ul>
            </li>
            </ul>
</div>

<br>

<div id="copyright"> <a >La fabrique du petit manger copyright 2018</a></div>




</footer>

</html>