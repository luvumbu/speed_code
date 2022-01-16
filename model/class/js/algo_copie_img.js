var img = document.getElementsByTagName("img"); 
var tabs = [''];
for(var i = 0 ; i<img.length; i++) {

tabs.push(img[i].src); 
}
tabs // copier l'object 