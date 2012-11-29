<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link href="./jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.css" rel="stylesheet" type="text/css"/>
        <link href="./jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.min.css" rel="stylesheet" type="text/css"/>
        
        <script type="text/javascript" src="./jquery-ui/js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="./jquery-ui/js/jquery-1.9.1.custom.js"></script>
        <script type="text/javascript" src="./jquery-ui/js/jquery-ui-1.9.1.custom.min.js"></script>
        

                
        <script type="text/javascript">
         $(document).ready(function () {
                        
            document.getElementById("div_jeu").style.display = "none";
            
            //Fonction Contact
            //A gérer le button envoyé pour le mail
            $("#img_contact").click(function(){
                $("#div_contact").dialog('open');
            });
            $( "#div_contact" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 600
            });
                        
            //Fonction Démarrer Jeu
            $("#img_demarrer").click(function(){
                document.getElementById("div_jeu").style.display = "block";
                document.getElementById("div_accueil").style.display = "none";
            });
                        
            //Fonction Aide
            $("#img_aide").click(function(){
                $("#div_aide").dialog('open');
            });
            $( "#div_aide" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 600
            });
        });
        </script>
        
        <style>
            #div_accueil {
                text-align: center;
            }
            #img_jeu_aide{
                width: 10%;
                height: 10%;
            }
            #img_jeu_contact{
                width: 10%;
                height: 10%;
            }
            #img_jeu_comparer{
                width: 15%;
                height: 15%;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div id="div_accueil">            
            <img id="img_contact" src="./images/contact.png" alt="Contact"/>  
            <img id="img_demarrer" src="./images/demarrer_jeu.png" id="img_demarrer" alt="Demarrer la partie"/>
            <img id="img_aide" src="./images/aide.png" alt="Aide"/>
        </div>
        
        
        <div id="div_contact" title="Contact">
<pre>
    <input required="required" type="text" name="input_nom" size="40"> 
    <input required="required" type="text" name="input_prenom" size="40"> 
    <input required="required" type="email" name="input_mail" size="40"> 
    <textarea required="required" cols="41" rows="5">

    </textarea>
    <button>Envoyer</button>
</pre>
        </div>
        
        <div id="div_jeu">
        
            
            
            <img id="img_jeu_indices" src="./images/contact.png" alt="Contact"/>
            <img id="img_jeu_comparer" src="./images/comparer.png" alt="Contact"/>
            
            <img id="img_jeu_contact" src="./images/contact.png" alt="Contact"/>
            <img id="img_jeu_aide" src="./images/aide.png" alt="Aide"/>
        </div>
        
        <div id="div_aide">
            
        </div>
    </body>
</html>
