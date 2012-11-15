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
                $("#comparer").dialog('open');
            });
            $( "#comparer" ).dialog({
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
                $("#abandonner").dialog('open');
            });
            $( "#abandonner" ).dialog({
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
                $("#victoire").dialog('open');
            });
            $( "#victoire" ).dialog({
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
 });
        
          
        </script>
        
        <title></title>
    </head>
    <body>
        
        <button id="bt_comparer">Comparer</button>
        <div id="comparer" title="Comparaison des deux vierges">
            <img src="image/viergeOriginal.png"> 
            <img src="image/viergeEnCours.png">
        </div>
        
        <button id="bt_abandonner">Abandonner</button>
        <div id="abandonner" title="Abandon">
            Voulez-vous quitter la partie en cours ?
        </div>
        
        
        <button id="bt_victoire" title="Victoire">Victoire</button>
        <div id="victoire">
            Victoire vous avez gagné 
        </div>

        <!--<div id="indices" class="popup_block">
            Indices 
            <br>
            <article><aside>Indice 1</aside>

            </article>
            <article><aside>Indice 2</aside>
            
            </article>
            <article><aside>Indice 3</aside>
            
            </article>
        </div>
        <div id="jeu">
        </div>
        <div id="viergeComplete">
            Vous avez trouvé toutes les erreurs de cette vierge  
        </div>-->
    </body>
</html>
