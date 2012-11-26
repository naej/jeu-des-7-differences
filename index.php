<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <link rel="stylesheet" href="index.css" type="text/css" media="screen">
        <script type="text/javascript" src="jquery-ui/index.html"></script>
        
        
        
        <link href="./jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.css" rel="stylesheet" type="text/css"/>
        <link href="./jquery-ui/css/smoothness/jquery-ui-1.9.1.custom.min.css" rel="stylesheet" type="text/css"/>
  
        
        <script type="text/javascript" src="./jquery-ui/js/jquery-1.8.2.js"></script>
        <script type="text/javascript" src="./jquery-ui/js/jquery-1.9.1.custom.js"></script>
        <script type="text/javascript" src="./jquery-ui/js/jquery-ui-1.9.1.custom.min.js"></script>
        
        
        <script type="text/javascript">
        $(document).ready(function () {
            //<script type="text/javascript" src="index.js">
            //$("#yourDiv").dialog({closeText:'hide'});
            //$('#yourDiv').dialog({modal:true}); // setup dialog. 
            //$('#yourDiv').dialog('open');//open dialog
            
            
            //Fonction comparer
            $("#bt_comparer").click(function(){
                $("#div_comparer").dialog('open');
            });
            $( "#div_comparer" ).dialog({
                autoOpen: false,
                resizable: false,
                width: 400,
                buttons: [{
                    text: "Fermer",
                    click: function() {
                        $( this ).dialog( "close" );
                        }
                    }]
            });
            $('#comparer').dialog({modal:true}); // setup dialog. 
           // $('#comparer').dialog('open');//open dialog
      

           //Fonction Abandonner
            $("#bt_abandonner").click(function(){
                $("#div_abandonner").dialog('open');
            });
            $( "#div_abandonner" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 400,
                buttons: [{
                    text: "Oui",
                    click: function() {
                        opener=self; 
                        self.close(); 
                        }
                    },
                    {
                        text: "Non", 
                        click: function(){
                            $(this).dialog("close");
                        }
                    }]
            });
        
        
            //Fonction Victoire
            //A modifier Pour activer l'événement lorsque toutes les vierges ont été corrigés
            $("#bt_victoire").click(function(){
                $("#div_victoire").dialog('open');
            });
            $( "#div_victoire" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 400,
                buttons: [{
                        text: "Rejouer", 
                        click: function(){
                            $(this).dialog("close");
                            //Ajouter le fait de rejouer 
                        }
                    },{
                        text: "Quitter",
                        click: function() {
                            opener=self; 
                            self.close(); 
                            }
                    }]
            });
            
            //Fonction ViergeComplete
            //A modifier Pour activer l'événement lorsque toutes les erreurs d'une vierge est trouvé
            $("#bt_viergeComplete").click(function(){
                $("#div_viergeComplete").dialog('open');
            });
            $( "#div_viergeComplete" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 400
            });
            
            //Fonction Contact
            //A gérer le button envoyé pour le mail
            $("#bt_contact").click(function(){
                $("#div_contact").dialog('open');
            });
            $( "#div_contact" ).dialog({
                autoOpen: false,
                resizable: false,
                modal:true,
                width: 600
            });
            
            
    });
        
          
        </script>
        
        <title></title>
    </head>
    <body>
        
 
        <button id="bt_contact">Contact</button>
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
        
        
        <button id="bt_comparer">Comparer</button>
        <div id="div_comparer" title="Comparaison des deux vierges">
            <img src="image/viergeOriginal.png"> 
            <img src="image/viergeEnCours.png">
        </div>
        
        <button id="bt_abandonner">Abandonner</button>
        <div id="div_abandonner" title="Abandon">
            Voulez-vous quitter la partie en cours ?
        </div>
        
        
        <button id="bt_victoire" title="Victoire">Victoire</button>
        <div id="div_victoire">
            Victoire vous avez gagné 
        </div>

        <button id="bt_viergeComplete" title="Victoire">Vierge Compléte</button>
        <div id="div_viergeComplete">
            Vous avez trouvé toutes les erreurs de cette vierge  
        </div>
        
        
              <!--
        <button id="bt_indices" title="Victoire">Indices</button>
        <div id="indices">
            Indices 
            <br>
            <article><aside>Indice 1</aside>

            </article>
            <article><aside>Indice 2</aside>
            
            </article>
            <article><aside>Indice 3</aside>
            
            </article>
        </div>
        
       
        -->
        
        <div id="div_accueil">            
            <img src="" alt="img_contact"/>  
            <img src="" alt="img_demarrer"/>
            <img src="" alt="img_aide"/>
        </div>
        <div id="div_jeu">
            
            
            
        </div>
        
    </body>
</html>
