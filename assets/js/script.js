const xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        console.log('Res:', this.responseText);
    }
};
xmlHttp.open("POST", "//toolsbox.c1.biz/api.php", true);
xmlHttp.send();