<!DOCTYPE html>
<html lang="en">
<title>ComicMania</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: 'Russo One', sans-serif;
}
.w3-bar,h1,button {font-family: 'Russo One', sans-serif;
}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body style="background-color:#ed1d24">

<!-- Navbar -->
<div class="w3-center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


<!-- Header -->
<header class=" w3-center" style="background-color:#ed1d24">
 <h1 class="w3-margin w3-jumbo w3-text-white">COMICMANIA</h1>
      <form id="signup-form" > 
        <div class="input-field">
                      <label for="signup-email">Correo Electronico</label>
  <br>

          <input type="email" id="signup-email" required class="w3-container  w3-center"/>
              <br>              <label for="signup-email">Correo Electronico</label>
  <br>

          <input type="email" id="signup-email" required class="w3-container  w3-center"/>
              <br>              <label for="signup-email">Correo Electronico</label>
  <br>

          <input type="email" id="signup-email" required class="w3-container  w3-center"/>
              <br>
  <br>
  <br>

                 <label for="signup-password">Contraseña</label>
  <br>

          <input type="password" id="signup-password" required class="w3-container  w3-center"/>
              <br>
  <br>
  <br>

        </div>
        <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" >Registrarse</button>
      </form>
   
  

  
    <script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase-firestore.js"></script>
  <script>
    // Initialize Firebase
    var config = {
     apiKey: "AIzaSyDHO4IvJJq7jAyx8JEH5KXTRNPZR7gWd0E",
    authDomain: "comicmania-parissi.firebaseapp.com",
    databaseURL: "https://comicmania-parissi.firebaseio.com",
    projectId: "comicmania-parissi",
    storageBucket: "comicmania-parissi.appspot.com",
    messagingSenderId: "170044031100",
    appId: "1:170044031100:web:f62e0a3d7533ac2a"
    };
    firebase.initializeApp(config);
    
    // make auth and firestore references
    const auth = firebase.auth();
    const db = firebase.firestore();
    // update firestore settings
    db.settings({ timestampsInSnapshots: true });
  </script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/auth.js"></script>
</header>

    </div>

</body>
</html>