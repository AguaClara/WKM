// var files = {'jpg':3};
// var pageName = "TeamLead";
// var containerElement = TLphotos;
// window.onload = function(){
//     for (var ext in files){
//         for (var i = 0; i < files[ext]; i++){
//             var src = "images/leadership/teamlead/" + pageName + (i+1) + "." + ext;
//             var img = new Image(); 
//             img.src = src;
//             containerElement.appendChild(img);
//         }
//     }
// }

$(document).ready( function() {
    $(".teamlead").each(function(i){
        $(this).append("<img id='team-lead-img' src='images/leadership/teamlead/TeamLead_"+(i+1)+".jpg' width='300' height='350' margin-left='50px' margin-right='50px' text-align=center></img>")
        return ( i < 4 );
    });
});