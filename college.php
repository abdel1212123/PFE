<?php include ("navbar.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collége</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-LudKNnhgPdm5MB5a5m5kZQ1mhoIzR8/K1jXzyvNWnS5gLRyBc8k+vWn52v/f4Zn4hdN1tHYW8GvC9gB/A3qJpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{	
    font-family: 'Poppins', sans-serif;
}
    h1 {
			font-size: 24px;
			font-weight: bold;
         
            padding: 17px ;
            margin-bottom: 10px;
             background-color: #f2f6f7;
             -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
             box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
    
   			 color: #29c68c; 
  		     font-size: 24px;
   			 font-weight: bold ;
   			 text-align :center;
		}
    .parag{
            
            
            padding : 55px 0px 0px 0px;
            margin: 0 0 0 0px;
            
    }
     /* Style pour les icônes */
     li i {
        color:	green ;
        margin-right: 10px;
        font-size: 20px;
        transition: all 0.2s ease-in-out;
      }
 /* Effet de zoom sur l'icône au survol */
 li:hover i {
        transform: scale(1.2);
      }

        /* Effet de changement de couleur sur l'icône et le texte du lien au survol */
        li:hover i,
      li:hover a {
        color: #29c68c ;
       

      }

  /* Centrer la liste */
  ul {
        margin: 0 auto;
        max-width: 500px;
      }
      
      /* Style pour les éléments de la liste */
      li {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        box-shadow: 1px 1px 5px #999;
        display:flex ;
                align-items: center;
        transition: all 0.2s ease-in-out;
      }
      
      /* Style pour le titre */
      h2 {
        margin-left: 20px;
        margin-bottom: 10px;
      }
      
      /* Effet shadow au survol */
      li:hover {
        box-shadow: 2px 2px 10px #999;
      }
      
      /* Style pour les liens */
     a {
        color: black;
        text-decoration: none;
        
        
        padding: 10px;
        transition: all 0.2s ease-in-out;
      }

      a:hover {
  color: black; /* Couleur du texte */
  text-decoration: none; /* Supprime le soulignement */
}

      ul {
  list-style-type: none;
}

/* Style pour le box du titre */
.title-box {
        color: #29c68c;
        margin-right:-90px;
        margin-left:-90px;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        box-shadow: 1px 1px 5px #999;
        text-align:center;
        
      }


      

    </style>
   

 <!-- Fontawsome --><script src="https://kit.fontawesome.com/7733613488.js" crossorigin="anonymous"></script>
</head>
<body>

    
<div class="parag "> 

     <h1> <i class="fa-solid fa-folder"></i> Collège </h1>
 </div>
 
 <ul>
             <div class="title-box">
                    <h2> <i class="fa-regular fa-folder-open"></i> 1ère année collège </h2>
                 </div>
                      
                 <li>
          <i class="fas fa-book"></i> <a href="1ACM.php">Mathématiques (Fr)</a>
        </li>
        <li>
          <i class="fas fa-flask"></i>
          <a href="#">Physique et Chimie (Fr)</a>
        </li>
        <li>
          <i class="fas fa-leaf"></i>
          <a href="#">Sciences de la vie et de la Terre (SVT Fr)</a>
        </li>
        <li>
          <i class="fas fa-pencil-alt"></i>
          <a href="#">Français</a>
        </li>
        <li>
          <i class="fas fa-language"></i>
          <a href="#">Anglais</a>
        </li>
    </ul>




    <ul>
             <div class="title-box">
                    <h2> <i class="fa-regular fa-folder-open"></i> 2ème année collège</h2>
                 </div>
                      
                 <li>
          <i class="fas fa-book"></i> <a href="2ACM.php">Mathématiques (Fr)</a>
        </li>
        <li>
          <i class="fas fa-flask"></i>
          <a href="#">Physique et Chimie (Fr)</a>
        </li>
        <li>
          <i class="fas fa-leaf"></i>
          <a href="#">Sciences de la vie et de la Terre (SVT Fr)</a>
        </li>
        <li>
          <i class="fas fa-pencil-alt"></i>
          <a href="#">Français</a>
        </li>
        <li>
          <i class="fas fa-language"></i>
          <a href="#">Anglais</a>
        </li>
    </ul>
 


    <ul>
             <div class="title-box">
                    <h2> <i class="fa-regular fa-folder-open"></i> 3ème année collège</h2>
                 </div>
                      
                 <li>
          <i class="fas fa-book"></i> <a href="3ACM.php">Mathématiques (Fr)</a>
        </li>
        <li>
          <i class="fas fa-flask"></i>
          <a href="#">Physique et Chimie (Fr)</a>
        </li>
        <li>
          <i class="fas fa-leaf"></i>
          <a href="#">Sciences de la vie et de la Terre (SVT Fr)</a>
        </li>
        <li>
          <i class="fas fa-pencil-alt"></i>
          <a href="#">Français</a>
        </li>
        <li>
          <i class="fas fa-language"></i>
          <a href="#">Anglais</a>
        </li>
    </ul>
 
 

    
</body>
<?php include ("footeer.php") ?>
 
</html>