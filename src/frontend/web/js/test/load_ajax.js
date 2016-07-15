/**
 * Created by Admin on 15/07/2016.
 */
$(document).ready(function (){
    $.ajax({
        url: "/thuc-pham-que/src/api/web/agency/get/3"
    }).then(function(data) {
        alert('success');
        console.log(data);
    });
})