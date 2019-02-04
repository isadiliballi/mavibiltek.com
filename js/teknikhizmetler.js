


var quadimages = document.querySelectorAll("#slayt figure");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); slayt.classList.toggle("full") }); 
}