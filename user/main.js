let indexslide = 0;
slide(indexslide);
function nextslide(n){
    slide(indexslide += n)
}
function slide(a){
    let img = document.querySelectorAll('#banner');
    if(indexslide >= img.length){
        indexslide = 0;
    }
    if(indexslide < 0){
        indexslide = img.length -1;

    }
    for(let i = 0;i<img.length;i++){
        img[i].style.display = 'none';
    }
    img[indexslide].style.display = 'block';
}
function autoslide(){
    let img = document.querySelectorAll('#banner');
    if(indexslide >= img.length){
        indexslide = 0;
    }
    for(let i = 0;i<img.length;i++){
        img[i].style.display = 'none';
    }
    img[indexslide].style.display = 'block';
    indexslide++
    let auto = setTimeout(autoslide, 2000)
}