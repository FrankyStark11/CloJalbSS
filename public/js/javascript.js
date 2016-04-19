//Faire afficher ou disparaitre la fenetre de description sous un item dans linventaire
//idDiv est le id de la div recus en param
function HideDivDesc(idDiv){

	var DivSec = "#Desc" + idDiv;

    $(DivSec).slideToggle("slow");
}

//Faire afficher ou disparaitre la fenetre de description sous un item dans linventaire
//idDiv est le id de la div recus en param
function HideDivSR(idDiv){

  var DivSec = "#" + idDiv;

    $(DivSec).slideToggle("slow");
}

//Permet dafficher et de cacher les option de recherche
$(document).ready(function(){
    $("#optPlus").click(function(){

        $("#SearchBox").slideToggle("slow", function() {
        
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
function showDescriptionSP(str){

        $.post("/index.php/Home/GetElementInvParamStr",
          {dataID: str},
        function(data){
          var Arr = JSON.parse(data);
          var TxtIdInfo = document.getElementById("IdItemReception");
          var TxtDescriptionInfo = document.getElementById("DescriptionItemReception");
          var TxtQteInfo = document.getElementById("QteItemReception");
          var TxtPrixInfo = document.getElementById("PrixItemReception");
          var BtnAjouterInfo = document.getElementById("BtnAjouterReception");

          //vide toutes les valeurs child du main
          if(Arr.length == 1){
            if(Arr[0]["InvNoId"] == TxtIdInfo.value.toUpperCase()){
              TxtDescriptionInfo.replaceChild(document.createTextNode(Arr[0]["InvDesc"]),TxtDescriptionInfo.childNodes[0]) ;
              TxtPrixInfo.value = Arr[0]["InvPrixCoutant"];
              TxtQteInfo.value = 1;
              TxtQteInfo.disabled = false;
              TxtPrixInfo.disabled = false;
              BtnAjouterInfo.disabled = false;
            }
            else{
              if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.replaceChild(document.createTextNode("Aucun élément"),TxtDescriptionInfo.childNodes[0]);
              }else{
                TxtDescriptionInfo.replaceChild(document.createTextNode("Élément non trouvé"),TxtDescriptionInfo.childNodes[0]);
              }
              
              TxtQteInfo.disabled = true;
              TxtPrixInfo.disabled = true;
              BtnAjouterInfo.disabled = true;
              TxtPrixInfo.value = "";
              TxtQteInfo.value = "";
            }
          }
          else{
            if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.replaceChild(document.createTextNode("Aucun élément"),TxtDescriptionInfo.childNodes[0]);
              }else{
                TxtDescriptionInfo.replaceChild(document.createTextNode("Élément non trouvé"),TxtDescriptionInfo.childNodes[0]);
              }
            TxtQteInfo.disabled = true;
            TxtPrixInfo.disabled = true;
            BtnAjouterInfo.disabled = true;
            TxtPrixInfo.value = "";
            TxtQteInfo.value = "";
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
              TxtDescriptionInfo.replaceChild(document.createTextNode(Arr[0]["InvDesc"]),TxtDescriptionInfo.childNodes[0]) ;
              TxtQteInfo.disabled = false;
              BtnAjouterInfo.disabled = false;
            }
            else{
              if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.replaceChild(document.createTextNode("Aucun élément"),TxtDescriptionInfo.childNodes[0]);
              }else{
                TxtDescriptionInfo.replaceChild(document.createTextNode("Élément non trouvé"),TxtDescriptionInfo.childNodes[0]);
              }
              
              TxtQteInfo.disabled = true;
              BtnAjouterInfo.disabled = true;
            }
          }
          else{
            if(TxtIdInfo.value == ""){
                TxtDescriptionInfo.replaceChild(document.createTextNode("Aucun élément"),TxtDescriptionInfo.childNodes[0]);
              }else{
                TxtDescriptionInfo.replaceChild(document.createTextNode("Élément non trouvé"),TxtDescriptionInfo.childNodes[0]);
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
  var DescItem = document.getElementById("DescriptionItemReception").textContent;
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

//lorsque les informations sont entré pour une reception 
//Cette methode l'envoie dans la zone de PO temporaire
function AddSoumissionElement(){

  var NoItem = (document.getElementById("IdItemReception").value).toUpperCase();
  var DescItem = document.getElementById("DescriptionItemReception").textContent;
  var QteItem = document.getElementById("QteItemReception").value; 
  var PrixItem = document.getElementById("PrixItemReception").value;
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

        var td_4 = document.createElement('td');
           td_4.appendChild( document.createTextNode(PrixItem) );
        tr_0.appendChild( td_4 );

        var td_3 = document.createElement('td');

           var button_0 = document.createElement('button');
              button_0.className = "BtnRetirer";
              button_0.addEventListener('click', function(){ RemoveElement(IDElement);}, false);
           td_3.appendChild( button_0 );

        tr_0.appendChild( td_3 );

     table_0.appendChild( tr_0 );
  }
}

//Par une methode AJAX, affiche les dossiers ouvert dans le systeme
function AfficherDossierOuvert(){

  var DataID = "Ouvert";

  $.post("/index.php/Home/GetDossier",
    {status: DataID},
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
        AddDossierOuvert(Arr[i]);
      }
    }else if(Arr.length == 0){
      document.getElementById("Main").appendChild(document.createTextNode("Aucun Dossier ouvert"));
    }
  });
}

//Par une methode AJAX, affiche tous les dossiers sans exeption
function AfficherDossier(){

  $.post("/index.php/Home/GetAllDossier",
    {},
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
        AddDossier(Arr[i]);
      }
    }else if(Arr.length == 0){
      document.getElementById("Main").appendChild(document.createTextNode("Aucun Dossier ouvert"));
    }
  });
}

//ajout de dossier ouvert
function AddDossier(itemArray){

  if (typeof itemArray !== 'object'){
   itemArray = JSON.parse(itemArray);
  }
  //definir les valeurs de litem ajouté
  var NoItem = itemArray.DossNumeroId;
  var Nom = itemArray.DossNomClient;
  var Prenom = itemArray.DossPrenomClient;
  var Ville = itemArray.DossVille;
  var Status = itemArray.DossStatus;

  var div_0 = document.createElement('div');
   div_0.className = "col-12 InfoBox";

   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode(NoItem) );
         tr_0.appendChild( td_0 );


         var td_1 = document.createElement('td');
            td_1.appendChild( document.createTextNode(Prenom + " " + Nom) );
         tr_0.appendChild( td_1 );


         var td_2 = document.createElement('td');
            td_2.appendChild( document.createTextNode(Ville) );
         tr_0.appendChild( td_2 );

         var td_3 = document.createElement('td');
            td_3.appendChild( document.createTextNode(Status) );
         tr_0.appendChild( td_3 );


         var td_3 = document.createElement('td');

            var button_0 = document.createElement('button');
               button_0.className = "BGOrange StyleBtn";
               button_0.appendChild( document.createTextNode("Afficher") );
               button_0.onclick = function(){
                  AfficherDetailDossierOuvert(itemArray);
                  $('#zone01').slideDown('slow');
               };
            td_3.appendChild( button_0 );

         tr_0.appendChild( td_3 );

      table_0.appendChild( tr_0 );

   div_0.appendChild( table_0 );

  document.getElementById("Main").appendChild( div_0 );
}

//ajout de dossier ouvert
function AddDossierOuvert(itemArray){

  if (typeof itemArray !== 'object'){
   itemArray = JSON.parse(itemArray);
  }
  //definir les valeurs de litem ajouté
  var NoItem = itemArray.DossNumeroId;
  var Nom = itemArray.DossNomClient;
  var Prenom = itemArray.DossPrenomClient;
  var Ville = itemArray.DossVille;

  var div_0 = document.createElement('div');
   div_0.className = "col-12 InfoBox";

   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode(NoItem) );
         tr_0.appendChild( td_0 );


         var td_1 = document.createElement('td');
            td_1.appendChild( document.createTextNode(Prenom + " " + Nom) );
         tr_0.appendChild( td_1 );


         var td_2 = document.createElement('td');
            td_2.appendChild( document.createTextNode(Ville) );
         tr_0.appendChild( td_2 );


         var td_3 = document.createElement('td');

            var button_0 = document.createElement('button');
               button_0.onclick = function(){
                  AfficherDetailDossierOuvert(itemArray);
                  $('#zone01').slideDown('slow');
               };
               button_0.className = "BGOrange StyleBtn";
               button_0.appendChild( document.createTextNode("Afficher") );
            td_3.appendChild( button_0 );

         tr_0.appendChild( td_3 );

      table_0.appendChild( tr_0 );

   div_0.appendChild( table_0 );

  document.getElementById("Main").appendChild( div_0 );
}

//lors de la selection d'un dossier, affiche tous les details de celui-ci
//le itemArray recus en param contient les détails du cas
function AfficherDetailDossierOuvert(itemArray){

  var no = document.getElementById("NoDossierDetail");
  var prenom = document.getElementById("PrenomDossierDetail");
  var nom = document.getElementById("NomDossierDetail");
  var ville = document.getElementById("VilleDossierDetail");
  var date = document.getElementById("DateDossierDetail");
  var type = document.getElementById("TypeDossierDetail");
  var status = document.getElementById("StatusDossierDetail");
  var pied = document.getElementById("PiedDossierDetail");
  var poteau = document.getElementById("PoteauDossierDetail");
  var valeur = document.getElementById("ValeurDossierDetail");

  var materiel = document.getElementById("tb01");

  lstmaterial = JSON.parse(itemArray.DossLstMateriaux);

  while (materiel.firstChild) {
    materiel.removeChild(materiel.firstChild);
  }

  for(i=0; i<lstmaterial.length ;i++){
    var tr_0 = document.createElement('tr');

       var td_0 = document.createElement('td');
          td_0.appendChild( document.createTextNode(lstmaterial[i][0]));
       tr_0.appendChild( td_0 );


       var td_1 = document.createElement('td');
          td_1.appendChild( document.createTextNode(lstmaterial[i][1]) );
       tr_0.appendChild( td_1 );


       var td_2 = document.createElement('td');
          td_2.appendChild( document.createTextNode(lstmaterial[i][3]) );
       tr_0.appendChild( td_2 );

    materiel.appendChild( tr_0 );
  }

  var menu1 = document.getElementById("headbox1");
  var menu2 = document.getElementById("headbox2");

  no.replaceChild(document.createTextNode(itemArray.DossNumeroId),no.childNodes[0]);
  prenom.replaceChild(document.createTextNode(itemArray.DossPrenomClient),prenom.childNodes[0]);
  nom.replaceChild(document.createTextNode(itemArray.DossNomClient),nom.childNodes[0]);
  ville.replaceChild(document.createTextNode(itemArray.DossVille),ville.childNodes[0]);
  date.replaceChild(document.createTextNode(itemArray.DossDateTravaux),date.childNodes[0]);
  type.replaceChild(document.createTextNode(itemArray.DossType),type.childNodes[0]);
  status.replaceChild(document.createTextNode(itemArray.DossStatus),status.childNodes[0]);
  pied.replaceChild(document.createTextNode(itemArray.DossPiedLineaire + "ft"),pied.childNodes[0]);
  poteau.replaceChild(document.createTextNode(itemArray.DossPoteau),poteau.childNodes[0]);
  valeur.replaceChild(document.createTextNode( (parseFloat(itemArray.DossValeur).toFixed(2)).toString() + "$"),valeur.childNodes[0]);

  menu1.replaceChild(document.createTextNode(itemArray.DossNomClient + ", " + itemArray.DossPrenomClient + " : " + itemArray.DossNumeroId),menu1.childNodes[0]);
  menu2.replaceChild(document.createTextNode(itemArray.DossNomClient + ", " + itemArray.DossPrenomClient + " : " + itemArray.DossNumeroId),menu2.childNodes[0]);

  document.getElementById("lienRetrait").href = "/index.php/Home/Retrait?NoDossier=" + itemArray.DossNumeroId+"&Nom="+itemArray.DossNomClient+"&Prenom="+itemArray.DossPrenomClient ;
  document.getElementById("lienAnnuler").href = "/index.php/Admin/AnnulerDossierConserver?NoDossier=" + itemArray.DossNumeroId;
  document.getElementById("lienAnnulerEffacer").href = "/index.php/Admin/AnnulerDossierEffacer?NoDossier=" + itemArray.DossNumeroId;
}

//Par une methode AJAX, cette methode va chercher la liste des pieces
//pour un No de dossier X pour permettre de confirmaer la qte
function AfficherLstPiecesRetrait(id){

  $.post("/index.php/Home/GetLstPiecesDossier",
    {no: id},
  function(data){
    itemArray = JSON.parse(JSON.parse(data)["DossLstMateriaux"]);
    for(i=0;i<itemArray.length;i++){
      AddPieceRetrait(itemArray[i]);
    }
  });

}

//Cette function confirme la piece et sa quantité 
//elle efface dans la premiere partie la piece
//insert aussi dans le hidden la piece pour quelle puisse etre envoyé par la suite
function ConfirmerQtePiece(id){
  var arr = GetArrayHidden();

  var NoPiece = document.getElementById(id + "-piece").value;
  var Qte = document.getElementById(id + "-qte").value;
  var QteReel = document.getElementById(id + "-qteReel").value;

  var ele = [NoPiece,QteReel];
  arr.push(ele);

  SetArrayHidden(arr);
  AjouterPieceResume(NoPiece,QteReel,Qte);

  var divRetir = document.getElementById(id);
  divRetir.parentNode.removeChild(divRetir);
}

//Retourne la piece dans la premiere colonne et la retire du hidden
function AnnulerConfirmationQtePiece(id){

  var NoPiece = document.getElementById(id + "-piece").value;
  var Qte = document.getElementById(id + "-qte").value;
  var QteReel = document.getElementById(id + "-qtereel").value;

  AddPieceRetrait2(NoPiece,Qte,QteReel);

  //retirer l'entrée qui corespond à la piece qui sera modifié
    var arr = GetArrayHidden();

    for(i=0;i<arr.length;i++){
        if( arr[i][0] == NoPiece ){
         arr.splice(i, 1);
         break; }
      }

    SetArrayHidden(arr);

    var divRetir = document.getElementById(id);
    divRetir.parentNode.removeChild(divRetir);
}

//Ajoute la piece dans la colonne resume avec DOM 
function AjouterPieceResume(No,qte,qtereel){

  var IdDiv = makeid();
  var div_0 = document.createElement('div');
     div_0.className = "col-12 InfoBox";
     div_0.id = IdDiv;

     var hidden1 = document.createElement('input');
         hidden1.type = "hidden";
         hidden1.value = No;
         hidden1.id = IdDiv + "-piece";
      div_0.appendChild(hidden1);

     var hidden1 = document.createElement('input');
         hidden1.type = "hidden";
         hidden1.value = qtereel.toString();
         hidden1.id = IdDiv + "-qte";
      div_0.appendChild(hidden1);

      var hidden1 = document.createElement('input');
         hidden1.type = "hidden";
         hidden1.value = qte.toString();
         hidden1.id = IdDiv + "-qtereel";
      div_0.appendChild(hidden1);

     var table_0 = document.createElement('table');
        table_0.className = "InfoPiece";

        var tr_0 = document.createElement('tr');

           var td_0 = document.createElement('td');
              td_0.appendChild( document.createTextNode(No) );
           tr_0.appendChild( td_0 );


           var td_1 = document.createElement('td');
              td_1.appendChild( document.createTextNode("Quantité retirée : " + qte.toString()) );
           tr_0.appendChild( td_1 );


           var td_2 = document.createElement('td');

              var button_0 = document.createElement('button');
                 button_0.className = "BGOrange StyleBtn";
                 button_0.appendChild( document.createTextNode("Retirer") );
                  button_0.addEventListener('click', function(){ AnnulerConfirmationQtePiece(IdDiv) }, false);
              td_2.appendChild( button_0 );

           tr_0.appendChild( td_2 );

        table_0.appendChild( tr_0 );

     div_0.appendChild( table_0 );

  document.getElementById("pieceResume").appendChild( div_0 );
}

//Ajoute la piece dans la colonne de retrait pour etre confirmé
function AddPieceRetrait(item){

  var IdDiv = makeid();

  var div_0 = document.createElement('div');
   div_0.className = "col-12 InfoBox";
   div_0.title = item[3];
   div_0.id = IdDiv;

   var hidden1 = document.createElement('input');
       hidden1.type = "hidden";
       hidden1.value = item[0];
       hidden1.id = IdDiv + "-piece";
    div_0.appendChild(hidden1);

  var hidden2 = document.createElement('input');
       hidden2.type = "hidden";
       hidden2.value = item[1];
       hidden2.id = IdDiv + "-qte";
    div_0.appendChild(hidden2);

   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode(item[0]));
         tr_0.appendChild( td_0 );


         var td_1 = document.createElement('td');
            td_1.appendChild( document.createTextNode("Prévu : " + item[1]));
         tr_0.appendChild( td_1 );


         var td_2 = document.createElement('td');

            var input_0 = document.createElement('input');
               input_0.placeholder = "Quantité réel";
               input_0.className = "StyleInput";
               input_0.id = IdDiv + "-qteReel";
               input_0.value = item[1];

            td_2.appendChild( input_0 );

         tr_0.appendChild( td_2 );

         var td_3 = document.createElement('td');

          var button_0 = document.createElement('button');
              button_0.className = "BGOrange StyleBtn";
              button_0.appendChild( document.createTextNode("Confirmer") );
              button_0.addEventListener('click', function(){ ConfirmerQtePiece(IdDiv) }, false);
          td_3.appendChild( button_0 );

        tr_0.appendChild( td_3 );

      table_0.appendChild( tr_0 );


      

   div_0.appendChild( table_0 );

  document.getElementById("DataPiece").appendChild( div_0 );
}

//Ajoute la piece dans la colonne de retrait pour etre confirmé
//selon 3 valeurs
function AddPieceRetrait2(No,qte,qtereel){

  var IdDiv = makeid();

  var div_0 = document.createElement('div');
   div_0.className = "col-12 InfoBox";
   div_0.id = IdDiv;

   var hidden1 = document.createElement('input');
       hidden1.type = "hidden";
       hidden1.value = No;
       hidden1.id = IdDiv + "-piece";
    div_0.appendChild(hidden1);

  var hidden2 = document.createElement('input');
       hidden2.type = "hidden";
       hidden2.value = qte;
       hidden2.id = IdDiv + "-qte";
    div_0.appendChild(hidden2);

   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode(No));
         tr_0.appendChild( td_0 );


         var td_1 = document.createElement('td');
            td_1.appendChild( document.createTextNode("Prévu : " + qte));
         tr_0.appendChild( td_1 );


         var td_2 = document.createElement('td');

            var input_0 = document.createElement('input');
               input_0.placeholder = "Quantité réel";
               input_0.className = "StyleInput";
               input_0.id = IdDiv + "-qteReel";
               input_0.value = qtereel;

            td_2.appendChild( input_0 );

         tr_0.appendChild( td_2 );

         var td_3 = document.createElement('td');

          var button_0 = document.createElement('button');
              button_0.className = "BGOrange StyleBtn";
              button_0.appendChild( document.createTextNode("Confirmer") );
              button_0.addEventListener('click', function(){ ConfirmerQtePiece(IdDiv) }, false);
          td_3.appendChild( button_0 );

        tr_0.appendChild( td_3 );

      table_0.appendChild( tr_0 );


      

   div_0.appendChild( table_0 );

  document.getElementById("DataPiece").appendChild( div_0 );
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
	   div_InvPlus001.className = "col-12 InfoBox";
	   div_InvPlus001.align = "left";


   var table_0 = document.createElement('table');
      table_0.className = "InfoPiece";

      var tr_0 = document.createElement('tr');

         var td_0 = document.createElement('td');
            td_0.appendChild( document.createTextNode( NoItem) );
         tr_0.appendChild( td_0 );

         var td_3 = document.createElement('td');
            td_3.appendChild( document.createTextNode(DescItem ));
         tr_0.appendChild( td_3 );

         var td_2 = document.createElement('td');
            td_2.appendChild( document.createTextNode("Qte : " + QteItem) );
         tr_0.appendChild( td_2 );

         var td_6 = document.createElement('td');
         //affiche le boutton de modification seulement si le mode administrateur est activé
        if(AdminMode == 1 || AdminMode == 0){
            var btnEdit1 = document.createElement('button');
                btnEdit1.className = "BtnEdit";
                btnEdit1.title = "Modifier la pièce";
                btnEdit1.addEventListener('click', function(){ Modification(NoItem) }, false);
            td_6.appendChild( btnEdit1 );

            var btnEdit3 = document.createElement('button');
                btnEdit3.className = "BtnLog";
                btnEdit3.title = "Log de cette pièce";
                btnEdit3.addEventListener('click', function(){ AfficherLog(NoItem) }, false);
            td_6.appendChild( btnEdit3 );
          }

            var btnEdit2 = document.createElement('button');
                btnEdit2.className = "BtnDetail";
                btnEdit2.title = "Afficher/Masquer les détails";
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
            td_16.appendChild( document.createTextNode("Prix cost : ")) ;
         tr_6.appendChild( td_16 );

         var td_17 = document.createElement('td');
            td_17.appendChild( document.createTextNode( (parseFloat(PrixCostItem).toFixed(2)).toString() + "$" ) );
         tr_6.appendChild( td_17 );

       table_1.appendChild( tr_6 ); 

       var tr_7 = document.createElement('tr');   

            var td_18 = document.createElement('td');
            td_18.appendChild( document.createTextNode("Prix cont : ")) ;
         tr_7.appendChild( td_18 );

         var td_19 = document.createElement('td');
            td_19.appendChild( document.createTextNode( (parseFloat(PrixContItem).toFixed(2)).toString() + "$" ) );
         tr_7.appendChild( td_19 );

       table_1.appendChild( tr_7 );

       var tr_8 = document.createElement('tr');   

            var td_20 = document.createElement('td');
            td_20.appendChild( document.createTextNode("Prix client : ")) ;
         tr_8.appendChild( td_20 );

         var td_21 = document.createElement('td');
            td_21.appendChild( document.createTextNode( (parseFloat(PrixClientItem).toFixed(2)).toString() + "$" ) );
         tr_8.appendChild( td_21 );

       table_1.appendChild( tr_8 );

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

//afficher ou cacher les sections
function AfficherChampsSection(type){
  if(type == "simple" || type == "double"){
    $("#LongeurCloture").slideUp(10);
    $("#LongeurPorte").slideDown(10); 
  }else{
    $("#LongeurPorte").slideUp(10);
    $("#LongeurCloture").slideDown(10); 
  }
}

//Retirer les sections dans la feuille de creation cas
function RetirerRowSection(id){

  var ArrayPrincipal = GetArrayHiddenSection();
  for(i=0;i<ArrayPrincipal.length;i++){
      if( ArrayPrincipal[i][3] == id && ArrayPrincipal[i][1] == "Cloture" ){
          RetirerSectionCloture(parseInt(ArrayPrincipal[i][2]),parseInt(ArrayPrincipal[i][0]),ArrayPrincipal[i][4]);
       break; }
    }

   for(i=0;i<ArrayPrincipal.length;i++){
      if( ArrayPrincipal[i][3] == id && ( ArrayPrincipal[i][1] == "simple" || ArrayPrincipal[i][1] == "double" ) ){
          RetirerSectionPorte(parseInt(ArrayPrincipal[i][2]),parseInt(ArrayPrincipal[i][0]),ArrayPrincipal[i][1],ArrayPrincipal[i][4]);
       break; }
    } 

  for(i=0;i<ArrayPrincipal.length;i++){
      if( ArrayPrincipal[i][3] == id ){
       ArrayPrincipal.splice(i, 1);
       break; }
    }

    SetArrayHiddenSection(ArrayPrincipal);
    AfficherTab();
}

//Write dans le hidden le nouveau tableau en param
function SetArrayHidden(arrayElement){
  var ele = document.getElementById("HiddenArrayPiece");
  ele.value = JSON.stringify(arrayElement);
}

//Read dans le hidden le nouveau tableau 
function GetArrayHidden(){
  var ele = document.getElementById("HiddenArrayPiece");
  return JSON.parse(ele.value);
}

//Write dans le hidden le nouveau tableau en param
function SetArrayHiddenSection(arrayElement){
  var ele = document.getElementById("HiddenArraySection");
  ele.value = JSON.stringify(arrayElement);
}

//Read dans le hidden le nouveau tableau
function GetArrayHiddenSection(){
  var ele = document.getElementById("HiddenArraySection");
  return JSON.parse(ele.value);
}

//ajout le beton dans la liste de soummision
function AjouterBeton(qte){
  var noTBET = "TBET-00000-BB";
  if(!PiecePresente(noTBET)){AjouterPieceRow(noTBET,qte);}
    else{UpdatePieceRow(noTBET,qte);}
}

//ajoute une section dans la page de creation de cas
function AjouterSectionRow(){
  var ID = makeid();
  var Longueur = document.getElementById("TxtLongueurSectionSR").value;
  var Hauteur = document.getElementById("TxtHauteurSectionSR").value;
  var Type = document.getElementById("TxtTypeSectionSR").value;
  var lattes = "";
  if( document.getElementById("checkLatteSR").value == "true"){lattes = "oui" }else{lattes = "non"};
  if(Type == "simple" || Type == "double"){ Longueur = document.getElementById("SelectDimentionporteSR").value}

  //ajoute la section
  var ArrayPrincipal = GetArrayHiddenSection();
  arraytemp = [Longueur,Type,Hauteur,ID,lattes];
  ArrayPrincipal.push(arraytemp);
  SetArrayHiddenSection(ArrayPrincipal);

  if(Type == "Cloture" && !isNaN(Longueur)){AjoutSectionCloture(Hauteur,Longueur);}
  if((Type == "simple" || Type == "double") && !isNaN(Longueur)){AjoutSectionPorte(Hauteur);}
}

//cette methode est appelé pour modifier la quantité d'une piece X recus en param
function UpdatePieceRow(nom,NouvelleQte){

  var ArrayPrincipal = GetArrayHidden();
  tab = document.getElementById("TabPieces");
  var piecePresente = false;

  //si la piece est a zero on retire la ligne au complet
  if (parseInt(NouvelleQte) < 1 || NouvelleQte == "" || isNaN(NouvelleQte)) {
    for(i=0;i<ArrayPrincipal.length;i++){
      if( ArrayPrincipal[i][0] == nom ){ ArrayPrincipal.splice(i, 1); break; }
    }
    SetArrayHidden(ArrayPrincipal);
  }
  else{
    for(i=0;i<ArrayPrincipal.length;i++){
      if( ArrayPrincipal[i][0] == nom ){ ArrayPrincipal[i][1] = NouvelleQte; break; }
    }
    SetArrayHidden(ArrayPrincipal);
  }

  AfficherTab();
}

//Ajoute la piece avec AJAX dans la section de view
function AjouterPieceRow(nom,qte){

  var ID = makeid();
  var Description;
  var Prix;
  var QteInv;

  if(parseInt(qte) > 0){

    document.getElementById("QtePotp4ft").disabled = true;
    document.getElementById("QtePotp5ft").disabled = true;
    document.getElementById("QtePotp6ft").disabled = true;
    document.getElementById("QteKit4ft").disabled = true;
    document.getElementById("QteKit5ft").disabled = true;
    document.getElementById("QteKit6ft").disabled = true;
    
    //va chercher la description, le prix et la quantité de la piece par AJAX
    $.post("/index.php/Home/GetItemDesc",
            {dataID: nom},
          function(data){

            var Arr = JSON.parse(data);
            Description = Arr["InvDesc"];
            Prix = Arr["InvPrixContracteur"];
            QteInv = Arr["InvQte"];

            var ArrayPrincipal = GetArrayHidden();
            arraytemp = [nom,qte,QteInv,Description,Prix];
            ArrayPrincipal.push(arraytemp);

            SetArrayHidden(ArrayPrincipal);
            AfficherTab();

            document.getElementById("QtePotp4ft").disabled = false;
            document.getElementById("QtePotp5ft").disabled = false;
            document.getElementById("QtePotp6ft").disabled = false;
            document.getElementById("QteKit4ft").disabled = false;
            document.getElementById("QteKit5ft").disabled = false;
            document.getElementById("QteKit6ft").disabled = false;

            });
  }
}

//retourne si true or false la piece existe deja dans le tableau
function PiecePresente(Nom){
  var ArrayPrincipal = GetArrayHidden();
  var piecePresente = false;

  for(i=0;i<ArrayPrincipal.length;i++){
    if( ArrayPrincipal[i][0] == Nom ){ piecePresente = true; break; }
  }
  return piecePresente;
}

//recois la qte de la piece recus en param
function GetPieceQte(Nom){
  var ArrayPrincipal = GetArrayHidden();

  for(i=0;i<ArrayPrincipal.length;i++){
    if( ArrayPrincipal[i][0] == Nom ){ return parseInt(ArrayPrincipal[i][1]); }
  }
}

//selon tous les params sur la page, ette function calcul le prix
function CalculPrix(){

  var champsTotalMaterial = document.getElementById("TotalMaterielPrix");
  var champsTotalTemps = document.getElementById("TotalTempsPrix");
  var champsSousTotal = document.getElementById("SousTotal");
  var champsTPS = document.getElementById("TPS");
  var champsTVQ = document.getElementById("TVQ");
  var champsGrandTotal = document.getElementById("GrandTotal");

  var champsInfoPiedL = document.getElementById("PiedLineaire");
  var ChampsInfoPoteau = document.getElementById("PoteauTotal");
  var ChampsInfoLatte = document.getElementById("latteTotal");

  var ChampsPrixPiedTemps = document.getElementById("PrixPiedTemps");
  var ChampsPrixPiedMateriel = document.getElementById("PrixPiedMateriel");
  var ChampsPrixPoteau = document.getElementById("PrixPoteau");
  var ChampsPrixLatte = document.getElementById("PrixLatte");
  var ChampsPrixPoseLatte = document.getElementById("PrixposeLatte");

  var additionMaterial = 0.00;
  var soustotal = 0.00;
  var TPS = 0.00;
  var TVQ = 0.00;
  var GrandTotal = 0.00;

  var piedLineaire = 0.00;
  var piedLineaireAvecLatte = 0.00;

  ArrayPieces = GetArrayHidden();
  for(i=0;i<ArrayPieces.length;i++){
    additionMaterial += parseFloat(ArrayPieces[i][4]) * parseFloat(ArrayPieces[i][1]); 
  }

  ArraySection = GetArrayHiddenSection();
  for(i=0;i<ArraySection.length;i++){
    if(ArraySection[i][1] == "Cloture"){ 
      piedLineaire += parseInt(ArraySection[i][0]); 
      if(ArraySection[i][4] == "oui"){
        piedLineaireAvecLatte += parseInt(ArraySection[i][0]);
      }
    } 
  }

  //calcul des meteriaux
  champsInfoPiedL.replaceChild(document.createTextNode(piedLineaire.toString() + " ft"),champsInfoPiedL.childNodes[0]);
  document.getElementById("PiedLineaireHidden").value = piedLineaire.toString() ;

  var qtepoteau = 0;

  if(document.getElementById("QtePotp4ft").value != "") { qtepoteau += parseInt(document.getElementById("QtePotp4ft").value);}
  if(document.getElementById("QtePotp5ft").value != "") { qtepoteau += parseInt(document.getElementById("QtePotp5ft").value);}
  if(document.getElementById("QtePotp6ft").value != "") { qtepoteau += parseInt(document.getElementById("QtePotp6ft").value);}

  ChampsInfoPoteau.replaceChild(document.createTextNode(qtepoteau.toString() + " poteau(x)"),ChampsInfoPoteau.childNodes[0]);
  document.getElementById("PoteauTotalHidden").value = qtepoteau.toString();

  ChampsInfoLatte.replaceChild(document.createTextNode((Math.ceil(piedLineaireAvecLatte/10)).toString() + " sac(s)"),ChampsInfoLatte.childNodes[0]);

  soustotal = additionMaterial;
  champsSousTotal.replaceChild(document.createTextNode((soustotal.toFixed(2)).toString()+ "$"),champsSousTotal.childNodes[0]);

  TPS = soustotal * 0.05;
  TVQ = soustotal * 0.0975;

  champsTPS.replaceChild(document.createTextNode((TPS.toFixed(2)).toString()+ "$"),champsTPS.childNodes[0]);
  champsTVQ.replaceChild(document.createTextNode((TVQ.toFixed(2)).toString()+ "$"),champsTVQ.childNodes[0]);

  GrandTotal = soustotal + TPS + TVQ ;
  champsGrandTotal.replaceChild(document.createTextNode((GrandTotal.toFixed(2)).toString()+ "$"),champsGrandTotal.childNodes[0]);
  document.getElementById("GrandTotalHidden").value = (GrandTotal.toFixed(2)).toString();
}

//affiche les tableaux de section et piece lors dune modification
function AfficherTab(){

  //vider le tableau actuel avant de le refaire
  var table = document.getElementById("TabPieces");
  while(table.rows.length > 1) {
    table.deleteRow(1);
  }

  //vider le tableau actuel avant de le refaire
  var table2 = document.getElementById("TabSections");
  while(table2.rows.length > 1) {
    table2.deleteRow(1);
  }

  //Ajout des pieces
  var ArrayPrincipal = GetArrayHidden();
  ArrayPrincipal.sort(function(a,b){ return a[0].toString() > b[0].toString(); });

  //ajout des pieces
  for(i=0;i<ArrayPrincipal.length;i++){

    var nom = ArrayPrincipal[i][0];
    var qte = ArrayPrincipal[i][1];
    var Description = ArrayPrincipal[i][3];
    var Prix = (parseFloat(ArrayPrincipal[i][4]).toFixed(2)).toString() + "$";
    var QteInv = ArrayPrincipal[i][2];

    var MainTab = document.getElementById("TabPieces");

    var tr_0 = document.createElement('tr');
        tr_0.id = nom;

     var td_0 = document.createElement('td');
        td_0.appendChild( document.createTextNode(nom) );
        td_0.id = nom+"td";
     tr_0.appendChild( td_0 );

     var td_1 = document.createElement('td');
        td_1.appendChild( document.createTextNode(qte + "/" + QteInv) );
     tr_0.appendChild( td_1 );


     var td_2 = document.createElement('td');
        td_2.appendChild( document.createTextNode(Prix) );
     tr_0.appendChild( td_2 );


     var td_3 = document.createElement('td');
        td_3.appendChild( document.createTextNode(Description) );
     tr_0.appendChild( td_3 );


    MainTab.appendChild( tr_0 );

    //compare les 2 quantitées
    if(parseInt(qte) > parseInt(QteInv)){td_0.style.color = "red";}else{td_0.style.color = "black";}
  }

  //Ajout des sections
  var ArrayPrincipal = GetArrayHiddenSection();
  for(i=0;i<ArrayPrincipal.length;i++){

    var Longueur = ArrayPrincipal[i][0];
    var Type = ArrayPrincipal[i][1];
    var Hauteur = ArrayPrincipal[i][2];
    var ID = ArrayPrincipal[i][3];
    var Lattes = ArrayPrincipal[i][4];

    var MainTab = document.getElementById("TabSections");

    var tr_0 = document.createElement('tr');
        tr_0.id = ID;
    if(Type == "simple" || Type == "double"){
        var td_0 = document.createElement('td');
        td_0.appendChild( document.createTextNode(Longueur + "po") );
        tr_0.appendChild( td_0 );
    }else{
        var td_0 = document.createElement('td');
        td_0.appendChild( document.createTextNode(Longueur + "ft") );
        tr_0.appendChild( td_0 );
    }

     if(Type == "simple" || Type == "double"){
       var td_1 = document.createElement('td');
          td_1.appendChild( document.createTextNode("Barrière " + Type) );
       tr_0.appendChild( td_1 );
      }else{
        var td_1 = document.createElement('td');
          td_1.appendChild( document.createTextNode( Type) );
       tr_0.appendChild( td_1 );
      }

      var td_2 = document.createElement('td');
        td_2.appendChild( document.createTextNode(Hauteur+"ft") );
     tr_0.appendChild( td_2 );



     var td_3 = document.createElement('td');
        td_3.appendChild( document.createTextNode(Lattes) );
     tr_0.appendChild( td_3 );


     var td_4 = document.createElement('td');

        var button_0 = document.createElement('button');
          button_0.value = ID;
           button_0.appendChild( document.createTextNode("Retirer") );
           button_0.className = "StyleBtn bgred";
           button_0.addEventListener('click', function(){ RetirerRowSection(this.value);}, false);
        td_4.appendChild( button_0 );

     tr_0.appendChild( td_4 );

    MainTab.appendChild( tr_0 );
  }

  CalculPrix();
}

//retire la section de cloture et appel la deduction des pieces
function RetirerSectionCloture(Hauteur,Longueur,AvecLattes){

  var CL = document.getElementById("SelectCouleurSR").value;
  var lattes = false;
  if(AvecLattes == "oui"){lattes = true;}else{lattes = false;}
  var arrayPrincipal = GetArrayHiddenSection();

  var noMAIL = "MAIL-0" + Hauteur + "029-" + CL;

  var noPOTI = "POTI-05178-" + CL;
  if(Hauteur == "6"){ noPOTI = "POTP-06238-" + CL; }

  var noCAPI = "CAPI-00178-" + CL;
  if(Hauteur == "6"){ noCAPI = "CAPI-00238-" + CL; }

  var noFILB = "FILB-00009-" + CL;
  var noLIEN = "LIEN-00612-" + CL;
  var noTRAV = "TRAV-15810-" + CL;
  var noLATT = "LATT-0" + Hauteur + "010-" + CL;

  var qteMAIL = 0;

  var qtePOTI = 0;

  var qteCAPI = 0;

  var qteFILB = 0;
  var qteLIEN = 0;
  var qteTRAV = 0;

  var qteLATT = 0;

  //calcul des pieces globals
  qteFILB += parseInt(Longueur);
  qteTRAV += parseInt(Math.ceil( Longueur/10 ));

  //calcul du nombre de poteau inter
  qtePOTI += parseInt(Math.floor( Longueur/7.5 ));
  qteCAPI = parseInt(qtePOTI);

  //calcul du nombre de lien par section selon hauteur
  qteMAIL += parseInt(Longueur);
  qteLATT += parseInt(Math.ceil( Longueur/10 ));

  if(Hauteur == "4"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 3));
  }

  if(Hauteur == "5"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 4));
  }

  if(Hauteur == "6"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 5));
  }

  if(!PiecePresente(noMAIL)){AjouterPieceRow(noMAIL,qteMAIL);}
  else{
    qteMAIL = GetPieceQte(noMAIL) - qteMAIL;
    UpdatePieceRow(noMAIL,qteMAIL);
  }

  if(!PiecePresente(noPOTI)){AjouterPieceRow(noPOTI,qtePOTI);}
  else{
    qtePOTI = GetPieceQte(noPOTI) - qtePOTI ;
    UpdatePieceRow(noPOTI,qtePOTI);
  }

  if(!PiecePresente(noCAPI)){AjouterPieceRow(noCAPI,qteCAPI);}
  else{
    qteCAPI =  GetPieceQte(noCAPI) - qteCAPI;
    UpdatePieceRow(noCAPI,qteCAPI);
  }

  if(lattes){
    if(!PiecePresente(noLATT)){AjouterPieceRow(noLATT,qteLATT);}
    else{
      qteLATT = GetPieceQte(noLATT) - qteLATT ;
      UpdatePieceRow(noLATT,qteLATT);
    }
  }

  if(!PiecePresente(noFILB)){AjouterPieceRow(noFILB,qteFILB);}
  else{
    qteFILB = GetPieceQte(noFILB) - qteFILB ;
    UpdatePieceRow(noFILB,qteFILB);
  }

  if(!PiecePresente(noLIEN)){AjouterPieceRow(noLIEN,qteLIEN);}
  else{
    qteLIEN =GetPieceQte(noLIEN) - qteLIEN ; 
    UpdatePieceRow(noLIEN,qteLIEN);
  }

  if(!PiecePresente(noTRAV)){AjouterPieceRow(noTRAV,qteTRAV);}
  else{
    qteTRAV =  GetPieceQte(noTRAV) - qteTRAV; 
    UpdatePieceRow(noTRAV,qteTRAV);
  }
}

//ajoute une section de cloture
function AjoutSectionCloture(Hauteur,Longueur){

  var CL = document.getElementById("SelectCouleurSR").value;
  var lattes = document.getElementById("checkLatteSR").value;
  var arrayPrincipal = GetArrayHiddenSection();

  var noMAIL = "MAIL-0" + Hauteur + "029-" + CL;

  var noPOTI = "POTI-05178-" + CL;
  if(Hauteur == "6"){ noPOTI = "POTP-06238-" + CL; }

  var noCAPI = "CAPI-00178-" + CL;
  if(Hauteur == "6"){ noCAPI = "CAPI-00238-" + CL; }

  var noFILB = "FILB-00009-" + CL;
  var noLIEN = "LIEN-00612-" + CL;
  var noTRAV = "TRAV-15810-" + CL;
  var noLATT = "LATT-0" + Hauteur + "010-" + CL;

  var qteMAIL = 0;

  var qtePOTI = 0;

  var qteCAPI = 0;

  var qteFILB = 0;
  var qteLIEN = 0;
  var qteTRAV = 0;

  var qteLATT = 0;

  //calcul des pieces globals
  qteFILB += parseInt(Longueur);
  qteTRAV += parseInt(Math.ceil( Longueur/10 ));

  //calcul du nombre de poteau inter
  qtePOTI += parseInt(Math.floor( Longueur/7.5 ));
  qteCAPI = parseInt(qtePOTI);

  //calcul du nombre de lien par section selon hauteur
  qteMAIL += parseInt(Longueur);
  qteLATT += parseInt(Math.ceil( Longueur/10 ));

  if(Hauteur == "4"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 3));
  }

  if(Hauteur == "5"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 4));
  }

  if(Hauteur == "6"){
    qteLIEN += parseInt(parseInt(Longueur) + (qtePOTI * 5));
  }

  if(!PiecePresente(noMAIL)){AjouterPieceRow(noMAIL,qteMAIL);}
  else{
    qteMAIL = qteMAIL + GetPieceQte(noMAIL);
    UpdatePieceRow(noMAIL,qteMAIL);
  }

  if(!PiecePresente(noPOTI)){AjouterPieceRow(noPOTI,qtePOTI);}
  else{
    qtePOTI = qtePOTI + GetPieceQte(noPOTI);
    UpdatePieceRow(noPOTI,qtePOTI);
  }

  if(!PiecePresente(noCAPI)){AjouterPieceRow(noCAPI,qteCAPI);}
  else{
    qteCAPI = qteCAPI + GetPieceQte(noCAPI);
    UpdatePieceRow(noCAPI,qteCAPI);
  }

  if(lattes == "true"){
    if(!PiecePresente(noLATT)){AjouterPieceRow(noLATT,qteLATT);}
    else{
      qteLATT = qteLATT + GetPieceQte(noLATT);
      UpdatePieceRow(noLATT,qteLATT);
    }
  }

  if(!PiecePresente(noFILB)){AjouterPieceRow(noFILB,qteFILB);}
  else{
    qteFILB = qteFILB + GetPieceQte(noFILB);
    UpdatePieceRow(noFILB,qteFILB);
  }

  if(!PiecePresente(noLIEN)){AjouterPieceRow(noLIEN,qteLIEN);}
  else{
    qteLIEN = qteLIEN + GetPieceQte(noLIEN); 
    UpdatePieceRow(noLIEN,qteLIEN);
  }

  if(!PiecePresente(noTRAV)){AjouterPieceRow(noTRAV,qteTRAV);}
  else{
    qteTRAV = qteTRAV + GetPieceQte(noTRAV); 
    UpdatePieceRow(noTRAV,qteTRAV);
  }
}

//ajoute une porte selon les paramz
function AjoutSectionPorte(Hauteur){

  //definition des variables

  var CL = document.getElementById("SelectCouleurSR").value;
  var Longueur = document.getElementById("SelectDimentionporteSR").value;
  var typePorte = document.getElementById("TxtTypeSectionSR").value;
  var lattes = document.getElementById("checkLatteSR").value;
  var arrayPrincipal = GetArrayHiddenSection();

  var noMAIL = "MAIL-0" + Hauteur + "029-" + CL; //rouleau de maille
  var noLATT = "LATT-0" + Hauteur + "010-" + CL; //Sac de lattes
  var noBARR = "BARR-0" + Hauteur + "0" + Longueur + "-" + CL; //Frame de la barriere
  var noBATE = "BATE-0" + Hauteur + "058-" + CL; //Barre de tension

  var noBRBA = "BRBA-00114-" + CL; //Bride de barriere
  var noLIEN = "LIEN-00612-" + CL; //Lien d'attache de la maille
  var noTRAV = "TRAV-15810-" + CL; //Traverse mediane pour barriere de 6ft
  var noKITS = "KITS-00238-" + CL; //Kit pour une barriere simple
  var noKITD = "KITD-00238-" + CL; //kit pour une barriere double

  var qteMAIL = 0;
  var qteLATT = 0;
  var qteBARR = 0;
  var qteBATE = 0;
  var qteBRBA = 0;
  var qteLIEN = 0;
  var qteTRAV = 0;
  var qteKITS = 0;
  var qteKITD = 0;

  //calcul des quantitées

  if(Longueur == "42"){
    qteMAIL = 3.6; 

  }

  if(Longueur == "48"){
    qteMAIL = 4; 
  }

  if(Longueur == "60"){
    qteMAIL = 5; 
  }

  if(Hauteur == "4" || Hauteur == "5"){ qteLIEN = Math.ceil(qteMAIL) * 2;}
  if(Hauteur == "6"){qteLIEN = qteMAIL * 3;}

  if(lattes == "true"){ qteLATT = 1; }

  if(typePorte == "double"){
    qteMAIL = qteMAIL * 2;
    qteBARR = 2;
    qteKITD = 1;
  }else{
    qteBARR = 1;
    qteKITS = 1;
  }

  qteBATE = 2 * qteBARR;

  if(Hauteur == "4") {qteBRBA = qteBATE * 3;}
  if(Hauteur == "5") {qteBRBA = qteBATE * 4;}
  if(Hauteur == "6") {qteBRBA = qteBATE * 5; qteTRAV = qteBARR;}

  //Ajout ou update des pieces

  if(!PiecePresente(noMAIL)){AjouterPieceRow(noMAIL,qteMAIL);}
    else{
      qteMAIL = qteMAIL + GetPieceQte(noMAIL);
      UpdatePieceRow(noMAIL,qteMAIL);
    }

  if(!PiecePresente(noLATT)){AjouterPieceRow(noLATT,qteLATT);}
    else{
      qteLATT = qteLATT + GetPieceQte(noLATT);
      UpdatePieceRow(noLATT,qteLATT);
    }

  if(!PiecePresente(noBARR)){AjouterPieceRow(noBARR,qteBARR);}
    else{
      qteBARR = qteBARR + GetPieceQte(noBARR);
      UpdatePieceRow(noBARR,qteBARR);
    }

  if(!PiecePresente(noBATE)){AjouterPieceRow(noBATE,qteBATE);}
    else{
      qteBATE = qteBATE + GetPieceQte(noBATE);
      UpdatePieceRow(noBATE,qteBATE);
    }

  if(!PiecePresente(noBRBA)){AjouterPieceRow(noBRBA,qteBRBA);}
    else{
      qteBRBA = qteBRBA + GetPieceQte(noBRBA);
      UpdatePieceRow(noBRBA,qteBRBA);
    }

  if(!PiecePresente(noLIEN)){AjouterPieceRow(noLIEN,qteLIEN);}
    else{
      qteLIEN = qteLIEN + GetPieceQte(noLIEN);
      UpdatePieceRow(noLIEN,qteLIEN);
    }

  if(!PiecePresente(noTRAV)){AjouterPieceRow(noTRAV,qteTRAV);}
    else{
      qteTRAV = qteTRAV + GetPieceQte(noTRAV);
      UpdatePieceRow(noTRAV,qteTRAV);
    }

  if(!PiecePresente(noKITS)){AjouterPieceRow(noKITS,qteKITS);}
    else{
      qteKITS = qteKITS + GetPieceQte(noKITS);
      UpdatePieceRow(noKITS,qteKITS);
    }

  if(!PiecePresente(noKITD)){AjouterPieceRow(noKITD,qteKITD);}
    else{
      qteKITD = qteKITD + GetPieceQte(noKITD);
      UpdatePieceRow(noKITD,qteKITD);
    }
}

//retirer une porte
function RetirerSectionPorte(Hauteur,Longueur,typePorte,AvecLattes){

  //definition des variables

  var CL = document.getElementById("SelectCouleurSR").value;
  var lattes = false;
  if(AvecLattes == "oui"){lattes = true;}else{lattes = false;}
  var arrayPrincipal = GetArrayHiddenSection();

  var noMAIL = "MAIL-0" + Hauteur + "029-" + CL; //rouleau de maille
  var noLATT = "LATT-0" + Hauteur + "010-" + CL; //Sac de lattes
  var noBARR = "BARR-0" + Hauteur + "0" + Longueur + "-" + CL; //Frame de la barriere
  var noBATE = "BATE-0" + Hauteur + "058-" + CL; //Barre de tension

  var noBRBA = "BRBA-00114-" + CL; //Bride de barriere
  var noLIEN = "LIEN-00612-" + CL; //Lien d'attache de la maille
  var noTRAV = "TRAV-15810-" + CL; //Traverse mediane pour barriere de 6ft
  var noKITS = "KITS-00238-" + CL; //Kit pour une barriere simple
  var noKITD = "KITD-00238-" + CL; //kit pour une barriere double

  var qteMAIL = 0;
  var qteLATT = 0;
  var qteBARR = 0;
  var qteBATE = 0;
  var qteBRBA = 0;
  var qteLIEN = 0;
  var qteTRAV = 0;
  var qteKITS = 0;
  var qteKITD = 0;

  //calcul des quantitées

  if(Longueur == "42"){
    qteMAIL = 3.6; 

  }

  if(Longueur == "48"){
    qteMAIL = 4; 
  }

  if(Longueur == "60"){
    qteMAIL = 5; 
  }

  if(Hauteur == "4" || Hauteur == "5"){ qteLIEN = Math.ceil(qteMAIL) * 2;}
  if(Hauteur == "6"){qteLIEN = qteMAIL * 3;}

  if(lattes){ qteLATT = 1; }

  if(typePorte == "double"){
    qteMAIL = qteMAIL * 2;
    qteBARR = 2;
    qteKITD = 1;
  }else{
    qteBARR = 1;
    qteKITS = 1;
  }

  qteBATE = 2 * qteBARR;

  if(Hauteur == "4") {qteBRBA = qteBATE * 3;}
  if(Hauteur == "5") {qteBRBA = qteBATE * 4;}
  if(Hauteur == "6") {qteBRBA = qteBATE * 5; qteTRAV = qteBARR;}

  //Ajout ou update des pieces

  if(!PiecePresente(noMAIL)){AjouterPieceRow(noMAIL,qteMAIL);}
    else{
      qteMAIL = GetPieceQte(noMAIL) - qteMAIL;
      UpdatePieceRow(noMAIL,qteMAIL);
    }

  if(!PiecePresente(noLATT)){AjouterPieceRow(noLATT,qteLATT);}
    else{
      qteLATT = GetPieceQte(noLATT) - qteLATT;
      UpdatePieceRow(noLATT,qteLATT);
    }

  if(!PiecePresente(noBARR)){AjouterPieceRow(noBARR,qteBARR);}
    else{
      qteBARR = GetPieceQte(noBARR) - qteBARR;
      UpdatePieceRow(noBARR,qteBARR);
    }

  if(!PiecePresente(noBATE)){AjouterPieceRow(noBATE,qteBATE);}
    else{
      qteBATE = GetPieceQte(noBATE) - qteBATE;
      UpdatePieceRow(noBATE,qteBATE);
    }

  if(!PiecePresente(noBRBA)){AjouterPieceRow(noBRBA,qteBRBA);}
    else{
      qteBRBA = GetPieceQte(noBRBA) - qteBRBA;
      UpdatePieceRow(noBRBA,qteBRBA);
    }

  if(!PiecePresente(noLIEN)){AjouterPieceRow(noLIEN,qteLIEN);}
    else{
      qteLIEN = GetPieceQte(noLIEN) - qteLIEN;
      UpdatePieceRow(noLIEN,qteLIEN);
    }

  if(!PiecePresente(noTRAV)){AjouterPieceRow(noTRAV,qteTRAV);}
    else{
      qteTRAV = GetPieceQte(noTRAV) - qteTRAV;
      UpdatePieceRow(noTRAV,qteTRAV);
    }

  if(!PiecePresente(noKITS)){AjouterPieceRow(noKITS,qteKITS);}
    else{
      qteKITS = GetPieceQte(noKITS) - qteKITS;
      UpdatePieceRow(noKITS,qteKITS);
    }

  if(!PiecePresente(noKITD)){AjouterPieceRow(noKITD,qteKITD);}
    else{
      qteKITD = GetPieceQte(noKITD) - qteKITD;
      UpdatePieceRow(noKITD,qteKITD);
    }
}

//ajoute les poteaux
function AjoutPOTP(Hauteur){
  var CL = document.getElementById("SelectCouleurSR").value;
  var noPiece = "POTP-0" + Hauteur + "238-" + CL;
  var Capuchon = "CAPP-00238-" + CL;

  var qtePiece = document.getElementById("QtePotp"+Hauteur+"ft").value;
  var qteCAPP = 0;

  if(document.getElementById("QtePotp4ft").value != "") { qteCAPP += parseInt(document.getElementById("QtePotp4ft").value);}
  if(document.getElementById("QtePotp5ft").value != "") { qteCAPP += parseInt(document.getElementById("QtePotp5ft").value);}
  if(document.getElementById("QtePotp6ft").value != "") { qteCAPP += parseInt(document.getElementById("QtePotp6ft").value);}
  
  if(!PiecePresente(noPiece) && qtePiece != ""){AjouterPieceRow(noPiece,qtePiece);}
  else{UpdatePieceRow(noPiece,qtePiece);}

  if(!PiecePresente(Capuchon)){AjouterPieceRow(Capuchon,qteCAPP);}
  else{UpdatePieceRow(Capuchon,qteCAPP);}
}

//ajoute les jkit
function AjoutKit(Hauteur){

  var CL = document.getElementById("SelectCouleurSR").value;

  //enregistre la valeur des 3 champs de kit
  var kit1 = parseInt(document.getElementById("QteKit4ft").value);
  var Kit2 = parseInt(document.getElementById("QteKit5ft").value);
  var Kit3 = parseInt(document.getElementById("QteKit6ft").value);

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
    if(Hauteur == "4") {QteBATE = 1*kit1;}

  }

  //pour un 5 pied
  if(!isNaN(Kit2)){

    QteBRTR += 1*Kit2;
    QteBOEC += 6*Kit2;
    QteBRTE += 4*Kit2;
   if(Hauteur == "5") { QteBATE = 1*Kit2;}
  }

  //pour un 6 pied
  if(!isNaN(Kit3)){

    QteBRTR += 1*Kit3;
    QteBOEC += 8*Kit3;
    QteBRTE += 5*Kit3;
    if(Hauteur == "6") {QteBATE = 1*Kit3;}

  }


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

  if(!PiecePresente(BATE) && QteBATE > 0 ){AjouterPieceRow(BATE,QteBATE);}
    else{UpdatePieceRow(BATE,QteBATE);}
}

//sur changement de couleur efface les tout 
function OnColorChange(){
  document.getElementById("QteKit4ft").value = "";
  document.getElementById("QteKit5ft").value = "";
  document.getElementById("QteKit6ft").value = "";
  document.getElementById("QtePotp4ft").value = "";
  document.getElementById("QtePotp5ft").value = "";
  document.getElementById("QtePotp6ft").value = "";

  var table = document.getElementById("TabPieces");
  while(table.rows.length > 1) {
    table.deleteRow(1);
  }
  var ar = [];
  SetArrayHidden(ar);
}