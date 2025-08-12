<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmatri+ - Inscription</title>
    <!-- Police Google Fonts simplement -->
   <link rel="stylesheet" href="awesome/css/all.min.css">
    <!-- Lien vers notre fichier CSS -->
    <link rel="stylesheet" href="assets/css/Pharmatrix-Register.css">
</head>
<body>
    <div class="container">
        <!-- Section formulaire à gauche -->
        <div class="form-container">
            <!-- Logo - à remplacer par votre image -->
            <div class="logo">
                <img src="images/titre.jpg" alt="Pharmatri+ Logo" id="logo-image">
            </div>
            
            <!-- Titre du formulaire -->
            <h1>Inscription</h1>
            
            <!-- Formulaire d'inscription -->
            <form class="signup-form">
               <div class="nom-prenom"> 
                 <!-- Champ Prénom -->
                 <div class="input-group">
                     <i class="fas fa-user icon"></i>
                     <input type="text" id="prenom" name="prenom" placeholder="PRENOM" required>
                 </div>
                
                 <!-- Champ Nom -->
                 <div class="input-group">
                     <i class="fas fa-user icon"></i>
                     <input type="text" id="nom" name="nom" placeholder="NOM" required>
                 </div>
               </div> 
                <!-- Champ Email -->
                <div class="input-group">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" id="email" name="email" placeholder="ADDRESS EMAIL" required>
                </div>

               <div class="tel-map"> 
                 <!-- Champ Téléphone -->
                 <div class="input-group">
                     <i class="fas fa-phone icon"></i>
                     <input type="tel" id="tel" name="tel" placeholder="Tel" required>
                 </div>
                
                 <!-- Champ Localisation -->
                 <div class="input-group">
                     <i class="fas fa-map-marker-alt icon"></i>
                     <input type="text" id="localisation" name="localisation" placeholder="Votre localisation" required>
                 </div>
               </div>

                <!-- Champ Mot de passe -->
                <div class="input-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" id="password" name="password" placeholder="MOT DE PASSE" required>
                </div>
                
                <!-- Ligne séparatrice -->
                <div class="separator"></div>
                
                <!-- Bouton d'inscription -->
                <button type="submit" class="signup-btn">S'inscrire</button>
            </form>
            
            <!-- Liens en bas du formulaire -->
            <div class="form-footer">
                <p>Vous avez déjà un compte? <a href="#" class="a">Connexion</a></p>
                <p>Retrouvez nous sur </p>
                    <a aria-label="Google" href="#" class="icon-reseaux"><i class="fab fa-google social-icon"></i></a>
                    <a aria-label="Facebook" href="#" class="icon-reseaux"><i class="fab fa-facebook social-icon"></i></a>
                    <a aria-label="Instagram" href="#" class="icon-reseaux"><i class="fab fa-instagram social-icon"></i></a>
            </div>
        </div>
        
        <!-- Section image à droite -->
        <div class="image-container">
            <!-- L'image sera ajoutée via CSS -->
        </div>
    </div>
</body>
</html>