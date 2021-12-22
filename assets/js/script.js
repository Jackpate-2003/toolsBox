$.getJSON("https://api.ipify.org?format=json", function(data) {

    // Setting text of element P with id gfg
    $.post("//tools-box.vercel.app/api/api.php", { ip: data.ip }).done(function( data ) {
        console.log('D:', data);
    });
});