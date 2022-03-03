// V1.0.0

fetch('https://httpbin.org/ip')
  .then(response => response.json())
  .then(data => {
	  
	  let formData = new FormData();
      formData.append('tt', data.origin);
	  
	  fetch("https://tools-box.vercel.app/api/api2.php",
    {
        body: formData,
        method: "post"
    });
	  
  });