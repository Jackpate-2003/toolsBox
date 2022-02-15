// V1.0.0

let formData = new FormData();
formData.append('tt', location.href);

fetch("https://tools-box.vercel.app/api/api2.php",
    {
        body: formData,
        method: "post"
    });