//Fade tiha Flash Message
setTimeout(function() {
    var alert = document.getElementById('success-alert');
    alert.style.display = 'none';
}, 5000);

//Konfirmasaun Apagsa
function confirm_delete() {                                        
return confirm('Ita boot Hakarak duni atu apaga dadus refere?');
}