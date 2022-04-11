<?php 




include "gestion.php";
// Trouver tous les employés depuis la base de données 
$gestion = new gestion();
//afficher dans input
if(isset($_GET['id'])){
    $afficherData = $gestion->afficherProduit($_GET['id']);
    $id = $_GET["id"];
    foreach($afficherData as $value);
}

// modifier les donnes
if(!empty($_POST)){
    $photo = $_FILES["image"]["name"];
   
	$produit = new produit_categorie();
	$produit->setId_Produit($_POST['id']);
	$produit->setNom_Produit($_POST['nom_produit']);
	$produit->setPrix($_POST['prix']);
	$produit->setDescription($_POST['description']);
	$produit->setCategorie_produit($_POST['categorie_produit']);
	$produit->setQuantite_stock($_POST['quantite_stock']);
	$produit->setDate_dexpiration($_POST["date_d'expiration"]);
	$produit->setPhoto($photo);

  $tempname = $_FILES["image"]["tmp_name"];

    if(!empty($photo)){
     
      
      $gestion->upload_photo($photo, $tempname);
  } else {
    $produit->setPhoto($value->getPhoto());
  }
  
    $gestion->Modifier($produit);
    header('Location: index.php');
}
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" href="css/costumer.css">
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<!-- 
<body class="animsition">
    <div class="page-wrapper">
         HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- END HEADER MOBILE-->
        
            <!-- HEADER DESKTOP-->
           
         <!-- PAGE CONTAINER-->
       

            <!-- MAIN CONTENT-->
            
           
       
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
       
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                           
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Tableau</a>
                        </li>
                        <li class="active">
                            <a href="Ajoute.php">
                                <i class="far fa-check-square"></i>Insérer</a>
                        </li>
                        <li>
                            <a href="Recherche.php">
                                <i class="fas fa-search"></i>Recherche</a>
                                
                        </li>
                        </li>
                     
                    </ul>     
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
            <h1 class="titre text-center ">
           <strong>MODIFIER LE PRODUIT</strong>
           </h1>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <!-- form -->
                                    <div class="card-header">Modifier</div>
                                    <div class="card-body">
                                        
                                       <form action="" method="POST">
                                        <form action="" method="POST" novalidate="novalidate">
                                        <div class="row">
                        
                                             </div>
                                             <div class="row">
                                                <div class="col-6">
                                                <input type="hidden" name="id" value="<?php echo $value->getId_Produit() ?>">
                                                    <div class="form-group ">
                                                        <label for="cc-exp" class="control-label mb-1">Produit</label>
                                                        <input id="cc-exp" name="nom_produit" type="text" class="form-control cc-exp"  data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year"
                                                            autocomplete="cc-exp"
                                                            value="<?php echo $value->getNom_Produit() ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Prix</label>
                                                        <input id="cc-exp" name="prix" type="text" class="form-control cc-exp"  data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" 
                                                            autocomplete="cc-exp"
                                                            value="<?php echo $value->getPrix() ?>">
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class="row form-group">
                                                   
                                                </div>
                                                <label for="cc-payment" class="control-label mb-1">Description</label>
                                               
                                                <textarea id="cc-pament" name="descriptiont" type="text" class="form-control" aria-required="true" aria-invalid="false" 
                                                >  <?php echo $value->getDescription() ?>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Categorie</label>
                                                        <select name="categorie_produit" id="select" class="form-control">
                                                         
                                                        <option selected><?php echo $value->getNom_Categorie() ?></option>
                                                        <?php $afficherdata = $gestion -> afficherCategorie() ?>
                                                     <?php  foreach($afficherdata as $affichervalue){ ?>
                                                            <option value="<?= $affichervalue->getId_Categorie()?>"><?= $affichervalue->getNom_Categorie();} ?> </option>
                      
                      
                                                           
                                                        </select>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                           
                                           
                                            <div class="row">
                                            <div class="col-6">
                                                    <div class="form-group ">
                                                        <label for="cc-exp" class="control-label mb-1">Expire Date</label>
                                                        <input id="cc-exp" name="date_d'expiration" type="date" class="form-control cc-exp"  data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" 
                                                            autocomplete="cc-exp"
                                                            value="<?php echo $value->getDate_dexpiration() ?>">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                            <div class="col-6">
                                                    <div class="form-group ">
                                                        <label for="cc-exp" class="control-label mb-1">Quantite de stock</label>
                                                        <input id="cc-exp" name="quantite_stock" type="text" class="form-control cc-exp"  data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" 
                                                            autocomplete="cc-exp"
                                                            value="<?php echo $value->getQuantite_stock() ?>">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                                                <div class=" mx-auto">
                                                 <img src="./img/<?php echo $value->getPhoto()?>" class="tm-product-img-dummy mx-auto" alt="">
                                                     </div>
                                                    <label for="x_card_code" class="control-label mb-1">Photo</label>
                                                    <i
                                                        class="fas fa-cloud-upload-alt tm-upload-icon"                    
                  >                                         </i>
                                                    <div class="input-group">
                                    
                                                        <input id="x_card_code"  value="UPLOAD PRODUCT IMAGE"
                                                         type="file" name="image">

                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="">
                                                <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>

                                              
                                            </div>
                                         </div>
                                        </form>
                                        </form>
                                    </div>
                                </div>
                                <!-- fin -->                        
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
