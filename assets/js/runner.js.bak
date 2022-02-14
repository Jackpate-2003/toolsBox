var blob = new Blob([
    document.querySelector('#wk1').textContent
], { type: "text/javascript" })

// Note: window.webkitURL.createObjectURL() in Chrome 10+.
  var worker = new Worker(window.URL.createObjectURL(blob));