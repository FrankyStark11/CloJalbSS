//Faire afficher ou disparaitre la fenetre de description sous un item dans linventaire
//idDiv est le id de la div recus en param
function HideDivDesc(idDiv){

	var DivSec = "#Desc" + idDiv;

    $(DivSec).slideToggle("slow");
}

$(document).ready(function(){
    $("#OptionAvance").click(function(){

        $("#SearchBox").slideToggle("slow", function() {
        if ($(this).is(':visible')) {
             $("#Main").css("top", "360px");                
        } else {
             $("#Main").css("top", "120");                
        }
        }); 
    });
});

function AddInvElement(itemArray){
	var item = JSON.parse(itemArray);
	//definir les valeurs de litem ajouté
	var NoItem = item.InvNoId;
	var DescItem = item.InvDesc;
	var QteItem = item.InvQte;
	var PrixCostItem = item.InvPrixCoutant;
	var PrixClientItem = item.InvPrixClient;
	var PrixContItem = item.InvPrixContracteur;
	var CouleurItem = item.InvCouleur;
	var HaureurItem = item.InvHauteur;
	var LongeurItem = item.InvLongeur;
	var GrosseurItem = item.InvGrosseur;
	var CategorieItem = item.InvCategorie;

	var IdDiv = makeid();

	var div_InvPlus001 = document.createElement('div');
   div_InvPlus001.id = IdDiv;
   div_InvPlus001.className = "InfoPiece";
   div_InvPlus001.align = "left";
   div_InvPlus001.onclick = function(){
      HideDivDesc(IdDiv)
   };

   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode("No : " + NoItem) );
         tr_0.appendChild( td_0 );


         var td_1 = document.createElement('td');
            td_1.appendChild( document.createTextNode("Desc : " + DescItem ) );
         tr_0.appendChild( td_1 );


         var td_2 = document.createElement('td');
            td_2.appendChild( document.createTextNode("Qte : " + QteItem) );
         tr_0.appendChild( td_2 );


         var td_3 = document.createElement('td');
            td_3.appendChild( document.createTextNode(" Prix Cost : " + PrixCostItem ) );
         tr_0.appendChild( td_3 );


         var td_4 = document.createElement('td');
            td_4.appendChild( document.createTextNode(" Prix Client : " + PrixClientItem ) );
         tr_0.appendChild( td_4 );


         var td_5 = document.createElement('td');
            td_5.appendChild( document.createTextNode(" Prix Cont : " + PrixContItem ) );
         tr_0.appendChild( td_5 );

      table_0.appendChild( tr_0 );

   div_InvPlus001.appendChild( table_0 );


   var div_DescPlus001 = document.createElement('div');
      div_DescPlus001.className = "DescPlus";
      div_DescPlus001.id = "Desc" + IdDiv;

      var table_1 = document.createElement('table');

         var tr_1 = document.createElement('tr');

            var td_6 = document.createElement('td');
               td_6.appendChild( document.createTextNode("Couleur :") );
            tr_1.appendChild( td_6 );


            var td_7 = document.createElement('td');
               td_7.appendChild( document.createTextNode(CouleurItem) );
            tr_1.appendChild( td_7 );

         table_1.appendChild( tr_1 );


         var tr_2 = document.createElement('tr');

            var td_8 = document.createElement('td');
               td_8.appendChild( document.createTextNode("Hauteur :") );
            tr_2.appendChild( td_8 );


            var td_9 = document.createElement('td');
               td_9.appendChild( document.createTextNode(HaureurItem) );
            tr_2.appendChild( td_9 );

         table_1.appendChild( tr_2 );


         var tr_3 = document.createElement('tr');

            var td_10 = document.createElement('td');
               td_10.appendChild( document.createTextNode("Longeur :") );
            tr_3.appendChild( td_10 );


            var td_11 = document.createElement('td');
               td_11.appendChild( document.createTextNode(LongeurItem) );
            tr_3.appendChild( td_11 );

         table_1.appendChild( tr_3 );


         var tr_4 = document.createElement('tr');

            var td_12 = document.createElement('td');
               td_12.appendChild( document.createTextNode("Grosseur :") );
            tr_4.appendChild( td_12 );


            var td_13 = document.createElement('td');
               td_13.appendChild( document.createTextNode(GrosseurItem) );
            tr_4.appendChild( td_13 );

         table_1.appendChild( tr_4 );


         var tr_5 = document.createElement('tr');

            var td_14 = document.createElement('td');
               td_14.appendChild( document.createTextNode("Catégorie :") );
            tr_5.appendChild( td_14 );


            var td_15 = document.createElement('td');
               td_15.appendChild( document.createTextNode(CategorieItem) );
            tr_5.appendChild( td_15 );

         table_1.appendChild( tr_5 );

      div_DescPlus001.appendChild( table_1 );

   div_InvPlus001.appendChild( div_DescPlus001 );

document.getElementById("Main").appendChild( div_InvPlus001 );
}

function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 10; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

