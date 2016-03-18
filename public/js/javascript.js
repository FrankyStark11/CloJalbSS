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
             //$("#Main").css("top", "300px");                
        } else {
             //$("#Main").css("top", "120");                
        }
        }); 
    });
});

function RemoveElement(idRetirer){
  var element = document.getElementById(idRetirer);
  //var DivPrinc = document.getElementById("LstBoxReceptionTemp");
  //DivPrinc.removeChild(ele);
  element.parentNode.removeChild(element);
}

function Modification(id){
  $.post("/index.php/Home/GetElementInvParamStr",
          {dataID: id},
        function(data){
          var Arr = JSON.parse(data);
          //Remplie les champs pour la modification
          window.location.href = "/index.php/Home/Modifier?JSONParam="+data;
          });
}

function showHint(){

        var DataID = document.getElementById("SearchBoxNoPiece").value;
        var DataCouleur = document.getElementById("SearchBoxCouleur").value;
        var DataGrosseur = document.getElementById("SearchBoxGrosseur").value;
        var DataHauteur = document.getElementById("SearchBoxHauteur").value;
        var DataLongeur = document.getElementById("SearchBoxLongeur").value;
        var DataCategorie = document.getElementById("SearchBoxCategorie").value;

        $.post("/index.php/Home/GetInvParamStr",
          {dataID: DataID,dataCouleur: DataCouleur,dataGrosseur: DataGrosseur,dataHauteur: DataHauteur,dataLongeur: DataLongeur,dataCategorie: DataCategorie},
        function(data){
          var Arr = JSON.parse(data);
          //vide toutes les valeurs child du main
          var myNode = document.getElementById("Main");
          while (myNode.firstChild) {
            myNode.removeChild(myNode.firstChild);
          }
          //ajoute les valeurs triées
          for(var i=0;i<Arr.length;i++){
            AddInvElement(Arr[i]);
          }
        });
}

function showDescription(str){

        $.post("/index.php/Home/GetInvParamStr",
          {dataStr: str},
        function(data){
          var Arr = JSON.parse(data);
          var TxtIdInfo = document.getElementById("IdItemReception");
          var TxtDescriptionInfo = document.getElementById("DescriptionItemReception");
          var TxtQteInfo = document.getElementById("QteItemReception");
          var BtnAjouterInfo = document.getElementById("BtnAjouterReception");

          //vide toutes les valeurs child du main
          if(Arr.length == 1){
            if(Arr[0]["InvNoId"] == TxtIdInfo.value){
              TxtDescriptionInfo.value = Arr[0]["InvDesc"];
              TxtQteInfo.disabled = false;
              BtnAjouterInfo.disabled = false;
            }
            else{
              if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.value = "Description du produit";
              }else{
                TxtDescriptionInfo.value = "Élément non trouvé";
              }
              
              TxtQteInfo.disabled = true;
              BtnAjouterInfo.disabled = true;
            }
          }
          else{
            if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.value = "Description du produit";
              }else{
                TxtDescriptionInfo.value = "Élément non trouvé";
              }
            TxtQteInfo.disabled = true;
            BtnAjouterInfo.disabled = true;
          }
        });
}

function AddReceptionElement(){

  var NoItem = document.getElementById("IdItemReception").value;
  var DescItem = document.getElementById("DescriptionItemReception").value;
  var QteItem = document.getElementById("QteItemReception").value; 
  var IDElement = makeid();

  var table_0 = document.getElementById("TabItems");
   var tr_0 = document.createElement('tr');
       tr_0.id = IDElement;

      var td_0 = document.createElement('td');
         td_0.appendChild( document.createTextNode(NoItem) );
      tr_0.appendChild( td_0 );


      var td_1 = document.createElement('td');
         td_1.appendChild( document.createTextNode(DescItem) );
      tr_0.appendChild( td_1 );


      var td_2 = document.createElement('td');
         td_2.appendChild( document.createTextNode(QteItem) );
      tr_0.appendChild( td_2 );


      var td_3 = document.createElement('td');

         var button_0 = document.createElement('button');
            button_0.className = "BtnRetirer";
            button_0.addEventListener('click', function(){ RemoveElement(IDElement);}, false);
         td_3.appendChild( button_0 );

      tr_0.appendChild( td_3 );

   table_0.appendChild( tr_0 );
}

function AddInvElement(itemArray){
  if (typeof itemArray !== 'object'){
	 itemArray = JSON.parse(itemArray);
  }
	//definir les valeurs de litem ajouté
	var NoItem = itemArray.InvNoId;
	var DescItem = itemArray.InvDesc;
	var QteItem = itemArray.InvQte;
	var PrixCostItem = itemArray.InvPrixCoutant;
	var PrixClientItem = itemArray.InvPrixClient;
	var PrixContItem = itemArray.InvPrixContracteur;
	var CouleurItem = itemArray.InvCouleur;
	var HaureurItem = itemArray.InvHauteur;
	var LongeurItem = itemArray.InvLongeur;
	var GrosseurItem = itemArray.InvGrosseur;
	var CategorieItem = itemArray.InvCategorie;

  var AdminMode = 1;

	var IdDiv = makeid();

	var div_InvPlus001 = document.createElement('div');
	   div_InvPlus001.id = IdDiv;
	   div_InvPlus001.className = "InfoPiece";
	   div_InvPlus001.align = "left";


   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode("No : " + NoItem) );
         tr_0.appendChild( td_0 );


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

         //affiche le boutton de modification seulement si le mode administrateur est activé
        if(AdminMode == 1){
         var td_6 = document.createElement('td');
            var btnEdit1 = document.createElement('button');
                btnEdit1.className = "BtnEdit";
                btnEdit1.addEventListener('click', function(){ Modification(NoItem) }, false);
            td_6.appendChild( btnEdit1 );
          }

            var btnEdit2 = document.createElement('button');
                btnEdit2.className = "BtnDetail";
                btnEdit2.addEventListener('click', function(){ HideDivDesc(IdDiv) }, false);
            td_6.appendChild( btnEdit2 );
         tr_0.appendChild( td_6 );

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
       	var tr_6 = document.createElement('tr');   

            var td_16 = document.createElement('td');
            td_16.appendChild( document.createTextNode("Description :" ) );
         tr_6.appendChild( td_16 );

         var td_17 = document.createElement('td');
            td_17.appendChild( document.createTextNode( DescItem ) );
         tr_6.appendChild( td_17 );

       table_1.appendChild( tr_6 );  

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

