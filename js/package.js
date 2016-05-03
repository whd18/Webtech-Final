// $(document).ready(function(){
// 	$("#destination").change(function(){
// 		var destination=$(this).val();
// 		$ajax({
// 			url:"package2.php",
// 			method:"POST",
// 			data:{place:destination},
// 			dataType:"text",
// 			success:function(data)
// 			{
// 				$("#accomodation").html(data);
// 			}
// 		});
// 	});
// });

	

function getState(val) {
    
      
     
         $.ajax({

            type: 'POST',
            url: 'sample.php',
            data: {place: val},
            dataType:"Text" ,         
          success: function(data){
            $('#accom').html(data);
            
            }
         });
}

function place(val) {
         alert(val);
        
     
         $.ajax({

            type: 'POST',
            url: 'sample.php',
            data: {package: val},
            dataType:"Text" ,         
          success: function(data){
            $('#place').html(data);
            
            }
         });


}

// function clickbtn() {
//    $.ajax({
//       url:"sample.php",
//       method:"POST",
//       success:function(data){
//          $('#live_data').html(data)
//       }

//    });
// }

function clickbtn() {
   var table='';
   var rows=3;
   var cols=3;
   for (var i = 0; i <rows; i++) {
     table += '<tr>';
     for (var c = 1; c <= cols; c++) {
        table +='<td>' + c + '</td>';
     }
     table += '</tr>';
   }
   document.write('<table>'+ table + '</table>');
}

// function getState(str) {
//     if (str == "") {
//         document.getElementById("accomodation").innerHTML = "";
//         return;
//     } else {
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                 document.getElementById("accomodation").innerHTML = xmlhttp.responseText;
//             }
//         };
//         xmlhttp.open("POST","package.php?place="+str,true);
//         xmlhttp.send();
//     }
// }