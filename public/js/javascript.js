//Faire afficher ou disparaitre la fenetre de description sous un item dans linventaire
//idDiv est le id de la div recus en param
function HideDivDesc(idDiv){

	var DivSec = "#Desc" + idDiv;

    $(DivSec).slideToggle("slow");
}

//Permet dafficher et de cacher les option de recherche
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

//Valide le formulaire de modification des items 
//pour eviter lenvoie de donnée vide ou erroné
function validateFormAjoutUtilisateur() {

  var FormValide = true;

  var Nom = document.getElementById("txtNomAjoutUtilisateur");
  var User = document.getElementById("txtUsernameAjoutUtilisateur");
  var Mdp1 = document.getElementById("txtmdpAjoutUtilisateur");
  var Mdp2 = document.getElementById("txtmdpCCAjoutUtilisateur");

  //verification du champs Nom_champs
  if(Nom.value == ""){
    $("#txtNomAjoutUtilisateur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtNomAjoutUtilisateur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(User.value == ""){
    $("#txtUsernameAjoutUtilisateur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtUsernameAjoutUtilisateur").css("border", "0px solid black");
  }

  //verification du champs Couleur
  if(Mdp1.value == ""){
    $("#txtmdpAjoutUtilisateur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtmdpAjoutUtilisateur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Mdp2.value == ""){
    $("#txtmdpCCAjoutUtilisateur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtmdpCCAjoutUtilisateur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Mdp1.value != Mdp2.value){
    $("#txtmdpCCAjoutUtilisateur").css("border", "2px solid red");
    $("#txtmdpAjoutUtilisateur").css("border", "2px solid red");
    FormValide = false;
  }else{
  }

  //Si aucun des champs contient une erreur le formulaire est envoyé
  return FormValide;
}

//Valide le formulaire de modification des items 
//pour eviter lenvoie de donnée vide ou erroné
function validateFormModification() {

  var FormValide = true;

  var NoId = document.getElementById("txtNoId");
  var Description = document.getElementById("txtDesc");
  var Couleur = document.getElementById("SelectModifCouleur");
  var Hauteur = document.getElementById("SelectModifHauteur");
  var Longeur = document.getElementById("SelectModificationLongeur");
  var Grosseur = document.getElementById("SelectModifGrosseur");
  var Categorie = document.getElementById("SelectModifCategorie");
  var Quantite = document.getElementById("TxtModifQuantite");
  var PrixCoutant = document.getElementById("TxtModifPrixCoutant");
  var PrixClient = document.getElementById("TxtModifPrixClient");
  var PrixContracteur = document.getElementById("TxtModifPrixContracteur");

  //verification du champs Nom_champs
  if(NoId.value == ""){
    $("#txtNoId").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtNoId").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Description.value == ""){
    $("#txtDesc").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#txtDesc").css("border", "0px solid black");
  }

  //verification du champs Couleur
  if(Couleur.value == "Choix"){
    $("#SelectModifCouleur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectModifCouleur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Hauteur.value == "Choix"){
    $("#SelectModifHauteur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectModifHauteur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Longeur.value == "Choix"){
    $("#SelectModificationLongeur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectModificationLongeur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Grosseur.value == "Choix"){
    $("#SelectModifGrosseur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectModifGrosseur").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Categorie.value == "Choix"){
    $("#SelectModifCategorie").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectModifCategorie").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(Quantite.value == ""){
    $("#TxtModifQuantite").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtModifQuantite").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(PrixCoutant.value == ""){
    $("#TxtModifPrixCoutant").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtModifPrixCoutant").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(PrixClient.value == ""){
    $("#TxtModifPrixClient").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtModifPrixClient").css("border", "0px solid black");
  }

  //verification du champs Nom_champs
  if(PrixContracteur.value == ""){
    $("#TxtModifPrixContracteur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtModifPrixContracteur").css("border", "0px solid black");
  }

  //Si aucun des champs contient une erreur le formulaire est envoyé
  return FormValide;
}


//Function pour la verification du formulaire
//d'insertion de nouveau élément dans le systeme
function validateFormInsertion() {

  var FormValide = true;

  var NoId = document.getElementById("TxtInsertionPieceId");
  var Description = document.getElementById("TxtInsertionDescription");
  var Couleur = document.getElementById("SelectInsertionCouleur");
  var Hauteur = document.getElementById("SelectInsertionHauteur");
  var Longeur = document.getElementById("SelectInsertionLongeur");
  var Grosseur = document.getElementById("SelectInsertionGrosseur");
  var Categorie = document.getElementById("SelectInsertionCategorie");
  var Quantite = document.getElementById("TxtInsertionQuantite");
  var PrixCoutant = document.getElementById("TxtInsertionPrixCoutant");
  var PrixClient = document.getElementById("TxtInsertionPrixClient");
  var PrixContracteur = document.getElementById("TxtInsertionPrixContracteur");

  //verification du champs Numero ID
  if(NoId.value == ""){
    $("#TxtInsertionPieceId").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionPieceId").css("border", "0px solid black");
  }

  //verification du champs Description
  if(Description.value == ""){
    $("#TxtInsertionDescription").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionDescription").css("border", "0px solid black");
  }

  //verification du champs Couleur
  if(Couleur.value == "Choix"){
    $("#SelectInsertionCouleur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectInsertionCouleur").css("border", "0px solid black");
  }

  //verification du champs Hauteur
  if(Hauteur.value == "Choix"){
    $("#SelectInsertionHauteur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectInsertionHauteur").css("border", "0px solid black");
  }

  //verification du champs Longeur
  if(Longeur.value == "Choix"){
    $("#SelectInsertionLongeur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectInsertionLongeur").css("border", "0px solid black");
  }

  //verification du champs Grosseur
  if(Grosseur.value == "Choix"){
    $("#SelectInsertionGrosseur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectInsertionGrosseur").css("border", "0px solid black");
  }

  //verification du champs Categorie
  if(Categorie.value == "Choix"){
    $("#SelectInsertionCategorie").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#SelectInsertionCategorie").css("border", "0px solid black");
  }

  //verification du champs Quantité
  if(Quantite.value == ""){
    $("#TxtInsertionQuantite").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionQuantite").css("border", "0px solid black");
  }

  //verification du champs Prix coutant
  if(PrixCoutant.value == ""){
    $("#TxtInsertionPrixCoutant").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionPrixCoutant").css("border", "0px solid black");
  }

  //verification du champs Prix client
  if(PrixClient.value == ""){
    $("#TxtInsertionPrixClient").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionPrixClient").css("border", "0px solid black");
  }

  //verification du champs Prix contracteur
  if(PrixContracteur.value == ""){
    $("#TxtInsertionPrixContracteur").css("border", "2px solid red");
    FormValide = false;
  }else{
    $("#TxtInsertionPrixContracteur").css("border", "0px solid black");
  }

  //Si aucun des champs contient une erreur le formulaire est envoyé
  return FormValide;
}

//Dans la page de reception
//permet de retirer une valeur mal entré dans le PO temporaire
function RemoveElement(idRetirer){
  var element = document.getElementById(idRetirer);
  element.parentNode.removeChild(element);
}

//Ouver la page de modification sur le clic du boutton edit
//envoie en param GET le json de lelement a modifier
function Modification(id){
  $.post("/index.php/Home/GetElementInvParamStr",
          {dataID: id},
        function(data){
          var Arr = JSON.parse(data);
          //Remplie les champs pour la modification
          window.location.href = "/index.php/Home/Modifier?JSONParam="+data;
          });
}

//Ouver la page de modification sur le clic du boutton edit
//envoie en param GET le json de lelement a modifier
function AfficherLog(id){
  $.post("/index.php/Home/LogElement",
          {dataID: id},
        function(data){
          var Arr = JSON.parse(data);
          //Remplie les champs pour la modification
          window.location.href = "/index.php/Home/LogUnique?JSONParam="+data;
          });
}

//Selon les params demandé dans la booite de recherche
//execute une requete AJAX pour trouver les elements correspondants
//Affiche les element restant dans la page inventaire
function showHint(TypeAffichage){

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

          if(Arr.length >= 1){
            //ajoute les valeurs triées
            for(var i=0;i<Arr.length;i++){
              AddInvElement(Arr[i],TypeAffichage);
            }
          }else if(Arr.length == 0){
            document.getElementById("Main").appendChild(document.createTextNode("Aucun élément ne correspond à votre recherche"));
          }
        });
}

//sur la page de reception
//affiche dans lespace description linformation concernant litem 
//selectionné
function showDescription(str){

        $.post("/index.php/Home/GetElementInvParamStr",
          {dataID: str},
        function(data){
          var Arr = JSON.parse(data);
          var TxtIdInfo = document.getElementById("IdItemReception");
          var TxtDescriptionInfo = document.getElementById("DescriptionItemReception");
          var TxtQteInfo = document.getElementById("QteItemReception");
          var BtnAjouterInfo = document.getElementById("BtnAjouterReception");

          //vide toutes les valeurs child du main
          if(Arr.length == 1){
            if(Arr[0]["InvNoId"] == TxtIdInfo.value.toUpperCase()){
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

//verifie si l'envoie est possible en verifiant la cooerence des champs
function AjoutItemPossible(){

  var ChampsId = document.getElementById("IdItemReception");
  var ChampsQte = document.getElementById("QteItemReception");

  var test1 = (ChampsId.value != "");
  var test2 = (ChampsQte.value != "" && parseInt(ChampsQte.value) >= 0);

  return ( test1 && test2 );
}

//lorsque les informations sont entré pour une reception 
//Cette methode l'envoie dans la zone de PO temporaire
function AddReceptionElement(){

  var NoItem = (document.getElementById("IdItemReception").value).toUpperCase();
  var DescItem = document.getElementById("DescriptionItemReception").value;
  var QteItem = document.getElementById("QteItemReception").value; 
  var IDElement = makeid();

  if(AjoutItemPossible()){
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
}

//cette methode permet dafficher un element recus en param
//a laide de DOM 
function AddInvElement(itemArray, TypeAffichage){
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

  var AdminMode = TypeAffichage;

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
            td_3.appendChild( document.createTextNode(" Prix Cost : " + PrixCostItem + "$" ) );
         tr_0.appendChild( td_3 );


         var td_4 = document.createElement('td');
            td_4.appendChild( document.createTextNode(" Prix Client : " + PrixClientItem + "$" ) );
         tr_0.appendChild( td_4 );


         var td_5 = document.createElement('td');
            td_5.appendChild( document.createTextNode(" Prix Cont : " + PrixContItem + "$" ) );
         tr_0.appendChild( td_5 );

         var td_6 = document.createElement('td');
         //affiche le boutton de modification seulement si le mode administrateur est activé
        if(AdminMode == 1 || AdminMode == 0){
            var btnEdit1 = document.createElement('button');
                btnEdit1.className = "BtnEdit";
                btnEdit1.addEventListener('click', function(){ Modification(NoItem) }, false);
            td_6.appendChild( btnEdit1 );

            var btnEdit3 = document.createElement('button');
                btnEdit3.className = "BtnLog";
                btnEdit3.addEventListener('click', function(){ AfficherLog(NoItem) }, false);
            td_6.appendChild( btnEdit3 );
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
      div_DescPlus001.align = "left";

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

//methode permetant de retourner un ID Unique pour la navigation par ID
function makeid(){
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for( var i=0; i < 10; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

//Sur lajout dans le systeme dune reception officiel
//genere un array des items et lenvoie sous forme de JSON
//Au controller qui lui genere son excel et UPDATES les données
function FuncExcel(){
  //declaration du array qui sera rempli des elements
  var ArrayElementPO = [];
  var ArrayFinal = [];

  //récuperation du tableau des items
  var table = document.getElementById('TabItems');
  var rowLength = table.rows.length;

  //sur tous les ROWS 
  for(var i=1; i<rowLength; i+=1){
    var row = table.rows[i];
    var cellLength = row.cells.length;

    //traverse tous les TD pour generer un array
    var ArrayEle = [];
    for(var y=0; y<cellLength-1; y+=1){
      var cell = row.cells[y];
      ArrayEle.push(cell.innerHTML );
    }
    ArrayElementPO.push(ArrayEle);
  }

  //Conversion des arrays en object
  for(var a in ArrayElementPO) {

    var item = ArrayElementPO[a];

    ArrayFinal.push({ 
        "ID" : item[0],
        "Description"  : item[1],
        "Qte"       : item[2] 
    });
  }

  //transformation de la commande en JSON et l'envoie
  var data = JSON.stringify(ArrayFinal);
  window.location.href = "/index.php/Admin/ReceptionUpdate?JSONParam="+data;
  
}

function RetirerRowSection(id){
  var element = document.getElementById(id);
  element.parentNode.removeChild(element);
}

function AjouterSectionRow(){
  var ID = makeid();
  var Longeur = document.getElementById("TxtLongueurSectionSR").value;
  var Hauteur = document.getElementById("TxtHauteurSectionSR").value;
  var Type = document.getElementById("TxtTypeSectionSR").value;

  var MainTab = document.getElementById("TabSections");

  var tr_0 = document.createElement('tr');
      tr_0.id = ID;

   var td_0 = document.createElement('td');
      td_0.appendChild( document.createTextNode(Longeur + "ft") );
   tr_0.appendChild( td_0 );


   var td_1 = document.createElement('td');
      td_1.appendChild( document.createTextNode(Type) );
   tr_0.appendChild( td_1 );


   var td_2 = document.createElement('td');
      td_2.appendChild( document.createTextNode(Hauteur+"ft") );
   tr_0.appendChild( td_2 );


   var td_3 = document.createElement('td');
      td_3.appendChild( document.createTextNode(" prix ") );
   tr_0.appendChild( td_3 );


   var td_4 = document.createElement('td');

      var button_0 = document.createElement('button');
         button_0.appendChild( document.createTextNode("Retirer") );
         button_0.addEventListener('click', function(){ RetirerRowSection(ID);}, false);
      td_4.appendChild( button_0 );

   tr_0.appendChild( td_4 );

MainTab.appendChild( tr_0 );

}

//cette methode est appelé pour modifier la quantité d'une piece X recus en param
function UpdatePieceRow(nom,NouvelleQte){
  tab = document.getElementById("TabPieces");
  var piecePresente = false;
  //prend tous les TD du tableau de piece et cherche la bonne piece
  tdElements = tab.getElementsByTagName('td');
  for(i = 0; i < tdElements.length; i++){
    if(tdElements[i].innerHTML == nom){
      tdElements[i+1].innerHTML = NouvelleQte;

      //compare les 2 quantitées
      if(parseInt(tdElements[i+1].innerHTML) > parseInt(tdElements[i+2].innerHTML)){ 
        document.getElementById(nom+"td").style.color = "red";
      }else{
        document.getElementById(nom+"td").style.color = "black";
      }

      //si la piece est a zero on retire la ligne au complet
      if (NouvelleQte == "0" || NouvelleQte == "" || isNaN(NouvelleQte)) {
        //trouve lelement par son ID qui est le meme que le numero de la piece qui est unique
        var element = document.getElementById(nom);
        element.parentNode.removeChild(element);
      }
      break;
    }
  }
}

function AjouterPieceRow(nom,qte){

  var ID = makeid();
  var Description;
  var Prix;
  var QteInv;

  //va chercher la description, le prix et la quantité de la piece par AJAX
  $.post("/index.php/Home/GetItemDesc",
          {dataID: nom},
        function(data){
          var Arr = JSON.parse(data);
          Description = Arr["InvDesc"];
          Prix = Arr["InvPrixContracteur"];
          QteInv = Arr["InvQte"];
        

  var MainTab = document.getElementById("TabPieces");

  var tr_0 = document.createElement('tr');
      tr_0.id = nom;

   var td_0 = document.createElement('td');
      td_0.appendChild( document.createTextNode(nom) );
      td_0.id = nom+"td";
   tr_0.appendChild( td_0 );


   var td_1 = document.createElement('td');
      td_1.appendChild( document.createTextNode(qte) );
   tr_0.appendChild( td_1 );


   var td_2 = document.createElement('td');
      td_2.appendChild( document.createTextNode(QteInv) );
   tr_0.appendChild( td_2 );


   var td_3 = document.createElement('td');
      td_3.appendChild( document.createTextNode(Description) );
   tr_0.appendChild( td_3 );


   var td_4 = document.createElement('td');
      td_4.appendChild( document.createTextNode(Prix + "$") );
   tr_0.appendChild( td_4 );

  MainTab.appendChild( tr_0 );

  //compare les 2 quantitées
  if(parseInt(qte) > parseInt(QteInv)){td_0.style.color = "red";}else{td_0.style.color = "black";}
  });
}

function PiecePresente(Nom){
tab = document.getElementById("TabPieces");
  var piecePresente = false;
  trElements = tab.getElementsByTagName('td');
  for(i = 0; i < trElements.length; i++){
    if(trElements[i].innerHTML == Nom){
      piecePresente = true;
    }
  }
  return piecePresente;
}

function AjoutPOTP(Hauteur){
  var CL = "NO";
  var noPiece = "POTP-0" + Hauteur + "238-" + CL;
  var qtePiece = document.getElementById("QtePotp"+Hauteur+"ft").value;
  
  if(!PiecePresente(noPiece) && qtePiece != ""){AjouterPieceRow(noPiece,qtePiece);}
  else{UpdatePieceRow(noPiece,qtePiece);}

}

function AjoutKit(Hauteur){

  var CL = "NO";

  //enregistre la valeur des 3 champs de kit
  var kit1 = parseInt(document.getElementById("QteKit4ft").value);
  var Kit2 = parseInt(document.getElementById("QteKit5ft").value);
  var Kit3 = parseInt(document.getElementById("QteKit6ft").value);

  var qtePiece = parseInt(document.getElementById("QteKit"+Hauteur+"ft").value);
  if(isNaN(qtePiece)){qtePiece = 0;}
  var EMTR;

  var BRTR = "BRTR-00238-" + CL;
  var BOEC = "BOEC-00516-GA";
  var BRTE = "BRTE-00238-" + CL;
  var BATE = "BATE-0" + Hauteur + "058-"+ CL;

  var QteBRTR = 0;
  var QteBOEC = 0;
  var QteBRTE = 0;
  var QteBATE = 0;

  //ajuste les quantitées selon la hauteur

  //pour un 4 pied
  if(!isNaN(kit1)){

    QteBRTR += 1*kit1;
    QteBOEC += 4*kit1;
    QteBRTE += 3*kit1;
    if(Hauteur == "4") {QteBATE += 1*kit1;}

  }

  //pour un 5 pied
  if(!isNaN(Kit2)){

    QteBRTR += 1*Kit2;
    QteBOEC += 6*Kit2;
    QteBRTE += 4*Kit2;
   if(Hauteur == "5") { QteBATE += 1*Kit2;}
  }

  //pour un 6 pied
  if(!isNaN(Kit3)){

    QteBRTR += 1*Kit3;
    QteBOEC += 8*Kit3;
    QteBRTE += 5*Kit3;
    if(Hauteur == "6") {QteBATE += 1*Kit3;}

  }

  //insert ou modifie les pieces 
  if( (kit1 > 0 || !isNaN(kit1)) || (kit2 > 0 || !isNaN(kit2)) || (kit3 > 0 || !isNaN(kit3)) ){

    if(!PiecePresente(BRTR) &&  QteBRTR > 0 ){AjouterPieceRow(BRTR,QteBRTR);}
        else{
            UpdatePieceRow(BRTR,QteBRTR);
        }

    if(!PiecePresente(BOEC) && QteBOEC > 0 ){AjouterPieceRow(BOEC,QteBOEC);}
      else{
        UpdatePieceRow(BOEC,QteBOEC);
      }

    if(!PiecePresente(BRTE) && QteBRTE > 0 ){AjouterPieceRow(BRTE,QteBRTE);}
      else{
        UpdatePieceRow(BRTE,QteBRTE);
      }

    //Ajout, update ou retire  
    if(!PiecePresente(BATE) && QteBATE > 0 ){AjouterPieceRow(BATE,QteBATE);}
      else{UpdatePieceRow(BATE,QteBATE);}
    }

}

/* © 2009 ROBO Design
 * http://www.robodesign.ro
 */

// Keep everything in anonymous function, called on window load.
if(window.addEventListener) {
window.addEventListener('load', function () {
  var canvas, context, canvaso, contexto;

  // The active tool instance.
  var tool;
  var tool_default = 'line';

  function init () {

    // Find the canvas element.
    canvaso = document.getElementById('imageView');
    if (!canvaso) {
      return;
    }

    if (!canvaso.getContext) {
      return;
    }

    // Get the 2D canvas context.
    contexto = canvaso.getContext('2d');
    if (!contexto) {
      return;
    }

    // Add the temporary canvas.
    var container = canvaso.parentNode;
    canvas = document.createElement('canvas');
    if (!canvas) {
      return;
    }

    canvas.id     = 'imageTemp';
    canvas.width  = canvaso.width;
    canvas.height = canvaso.height;
    container.appendChild(canvas);

    context = canvas.getContext('2d');

    // Get the tool select input.
    var tool_select = document.getElementById('dtool');
    if (!tool_select) {
      //alert('Error: failed to get the dtool element!');
      return;
    }
    tool_select.addEventListener('change', ev_tool_change, false);

    // Activate the default tool.
    if (tools[tool_default]) {
      tool = new tools[tool_default]();
      tool_select.value = tool_default;
    }

    // Attach the mousedown, mousemove and mouseup event listeners.
    canvas.addEventListener('mousedown', ev_canvas, false);
    canvas.addEventListener('mousemove', ev_canvas, false);
    canvas.addEventListener('mouseup',   ev_canvas, false);
  }

  // The general-purpose event handler. This function just determines the mouse 
  // position relative to the canvas element.
  function ev_canvas (ev) {
    if (ev.layerX || ev.layerX == 0) { // Firefox
      ev._x = ev.pageX;
      ev._y = ev.pageY;
    }

    // Call the event handler of the tool.
    var func = tool[ev.type];
    if (func) {
      func(ev);
    }
  }

  // The event handler for any changes made to the tool selector.
  function ev_tool_change (ev) {
    if (tools[this.value]) {
      tool = new tools[this.value]();
    }
  }

  // This function draws the #imageTemp canvas on top of #imageView, after which 
  // #imageTemp is cleared. This function is called each time when the user 
  // completes a drawing operation.
  function img_update () {
    contexto.drawImage(canvas, 0, 0);
    context.clearRect(0, 0, canvas.width, canvas.height);
  }

  // This object holds the implementation of each drawing tool.
  var tools = {};

  // The drawing pencil.
  tools.pencil = function () {
    var tool = this;
    this.started = false;

    // This is called when you start holding down the mouse button.
    // This starts the pencil drawing.
    this.mousedown = function (ev) {
        context.beginPath();
        context.moveTo(ev._x, ev._y);
        tool.started = true;
    };

    // This function is called every time you move the mouse. Obviously, it only 
    // draws if the tool.started state is set to true (when you are holding down 
    // the mouse button).
    this.mousemove = function (ev) {
      if (tool.started) {
        context.lineTo(ev._x, ev._y);
        context.stroke();
      }
    };

    // This is called when you release the mouse button.
    this.mouseup = function (ev) {
      if (tool.started) {
        tool.mousemove(ev);
        tool.started = false;
        img_update();
      }
    };
  };

  // The rectangle tool.
  tools.rect = function () {
    var tool = this;
    this.started = false;

    this.mousedown = function (ev) {
      tool.started = true;
      tool.x0 = ev._x;
      tool.y0 = ev._y;
    };

    this.mousemove = function (ev) {
      if (!tool.started) {
        return;
      }

      var x = Math.min(ev._x,  tool.x0),
          y = Math.min(ev._y,  tool.y0),
          w = Math.abs(ev._x - tool.x0),
          h = Math.abs(ev._y - tool.y0);

      context.clearRect(0, 0, canvas.width, canvas.height);

      if (!w || !h) {
        return;
      }

      context.strokeRect(x, y, w, h);
    };

    this.mouseup = function (ev) {
      if (tool.started) {
        tool.mousemove(ev);
        tool.started = false;
        img_update();
      }
    };
  };

  // The line tool.
  tools.line = function () {
    var tool = this;
    this.started = false;

    this.mousedown = function (ev) {
      tool.started = true;
      tool.x0 = ev._x;
      tool.y0 = ev._y;
    };

    this.mousemove = function (ev) {
      if (!tool.started) {
        return;
      }

      context.clearRect(0, 0, canvas.width, canvas.height);

      context.beginPath();
      context.moveTo(tool.x0, tool.y0);
      context.lineTo(ev._x,   ev._y);
      context.stroke();
      context.closePath();
    };

    this.mouseup = function (ev) {
      if (tool.started) {
        tool.mousemove(ev);
        tool.started = false;
        img_update();
      }
    };
  };

  init();

}, false); }