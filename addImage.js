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
        $(this).append("<img src='images/leadership/teamlead/TeamLead"+(i+1)+".jpg' width='300' height='400'></img>")
        return ( i < 4 );
    });
});