function afficher(donnees,divToChange){ // pour remplacer le contenu du div contenu
$("#"+divToChange).empty(); // on vide le div
$("#"+divToChange).append(donnees); // on met dans le div le résultat de la requête ajax
setTooltip();
}

    


  
function initDiv(lien,divToChange){ 
$(document).ready(function(){   // le document est chargé
  page=lien;
  $.ajax({ // ajax
    url: page, // url de la page à charger
    cache: false, // pas de mise en cache
    success:function(html){ // si la requête est un succès
    afficher(html,divToChange);     // on execute la fonction afficher(donnees)
    },
    error:function(XMLHttpRequest, textStatus, errorThrows){ // erreur durant la requete
    }
    });
  return false; // on desactive le lien
  });


}

function initFirstPage(){

  $("#resume-link").attr("class","skel-panels-ignoreHref");
  $("#village-link").attr("class","skel-panels-ignoreHref active");
  initDiv('village.php','main');
}

function setTooltip(){
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
}

$(document).ready(function(){
  
  $("html").css("overflow-X","hidden");
});

function showZoom(page)
{
 var zoom=page+".php";
 var url=zoom;


  $.zoombox.open(url,{
  width : 800,
  height : 600,
  opacity : 0.6,
  duration : 0,
  theme :'prettyphoto' } );


}

function changeClasse(classe){
  var type=$("#type").val();
  var img="<img src='images/"+classe+"_"+type+".PNG' width='250' height='300'/>";
  afficher(img,"classe-img");
  showBonus(classe);

}

function showBonus(classe){
   $("#plsForce").hide();
   $("#plsAgilité").hide();
   $("#plsBio").hide();
   $("#plsGéologie").hide();
   $("#plsPhysiologie").hide();
   $("#plsAutonomie").hide();
   $("#plsEndurance").hide();
   $("#plsMotricité").hide();

   switch(classe) {
    case 'guerisso':
        $("#plsPhysiologie").show();
        $("#plsMotricité").show();
        break;
    case 'explo':
        $("#plsBio").show();
        $("#plsEndurance").show();
        break;
    case 'speleo':
        $("#plsGéologie").show();
        $("#plsAgilité").show();
        break;
    case 'indiana':
        $("#plsAutonomie").show();
        $("#plsForce").show();
        break;
    default:
        break;
}

}

function showCase(target){
   var zoom="case.php?";
   var url=zoom;
   url=url.concat("&case=");
   url=url.concat(target);


  $.zoombox.open(url,{
  width : 800,
  height : 600,
  opacity : 0.6,
  duration : 0,
  theme :'prettyphoto' } );
}

function changeType(){
  var type = $("#type").val();
  if(type=="dude"){
    $("#type").val('girl');
  }else{
    $("#type").val('dude');
  }

  var classeActive=$('input[name=classe]:checked').val();
  changeClasse(classeActive); 
}

function showObjectif(divToShow,divToHide){
  if(divToHide!=''){
    $("#"+divToHide).toggle();
  }
  $("#"+divToShow).toggle();
  $("#lastObj").val(divToShow);
}

function initGame(classeActive){
  var page='initGame.php?classe=';
  page=page.concat(classeActive);
  $.ajax({ // ajax
      url: page, // url de la page à charger
      cache: false, // pas de mise en cache
      success:function(html){ // si la requête est un succès
        window.parent.location.reload();   // on execute la fonction afficher(donnees)
      },
      error:function(XMLHttpRequest, textStatus, errorThrows){ // erreur durant la requete
      }
      });
  return false;

}

function getLastInit(){
  var type = $("#type").val();
  var classeActive=$('input[name=classe]:checked').val();
  classeActive=classeActive.concat("_");
  classeActive=classeActive.concat(type);
  initDiv('init3.php?classe='+classeActive,'page');
}

function discoverLoot(objet){
  if(confirm("Découvrir cet objet?( 1 point d'action)")){
    alert(objet);
  }
}

function showText(text,type){
  switch(text) {
    case 'text1':
        $("#text1").hide();
        $("#text2").show();
        $("#last").show();
        $("#currentText").val('text2');
        break;
    case 'text2':
        $("#text2").hide();
        if(type=='last'){
          $("#text1").show();
          $("#last").hide();
          $("#currentText").val('text1');
        }else{
          $("#text3").show();
          $("#currentText").val('text3');
        }
        break;
    case 'text3':
        $("#text3").hide();
        if(type=='last'){
          $("#text2").show();
          $("#currentText").val('text2');
        }else{
          
          $("#text4").show();
          $("#currentText").val('text4');
        }
        break;
    case 'text4':
        $("#text4").hide();
        if(type=='last'){
          $("#text3").show();
          $("#currentText").val('text3');
        }else{          
          initDiv('init2.php','page');
        }
        break;
    default:
        break;
}
}

function changeCase(newCoord){
  var conf = 'Voullez-vous rendre en '.concat(newCoord);
    var page='changeCase.php?currCoo=';
  page=page.concat($("#currentCoord").val());
  page=page.concat('&newCoo=');
  page=page.concat(newCoord);
  $.ajax({ // ajax
      url: page, // url de la page à charger
      cache: false, // pas de mise en cache
      success:function(html){
      if(confirm(conf)){
 // si la requête est un succès
        initDiv('island.php','main'); 
        }else{
          return false;
        }  // on execute la fonction afficher(donnees)
      },
      error:function(XMLHttpRequest, textStatus, errorThrows){ // erreur durant la requete
      }
      });

  return false;

}