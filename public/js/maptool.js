/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function switchFloor(oldFloorNumber, newFloorNumber) {
  $("#input-floor").data('val', newFloorNumber);
          
  $("#floor".concat(oldFloorNumber)).css("display", "none");
  $("#floor".concat(newFloorNumber)).css("display", "block");
  
  $("#markers".concat(oldFloorNumber)).css("display", "none");
  $("#markers".concat(newFloorNumber)).css("display", "block"); 
}



$(document).ready( function(){
    switchFloor(1,1);

$('#input-floor').on('change', function(){
    var oldFloorNumber = $(this).data('val');
    var newFloorNumber = $(this).val();
    console.log("Prev value " + oldFloorNumber);
    console.log("New value " + newFloorNumber);
    switchFloor(oldFloorNumber, newFloorNumber);
});

$('.map-marker').each(function(){ 
   $(this).click(function(){ 
          var id = "#dialog-".concat($(this).attr('id'));
          $(id).dialog();
          
});

});

});
