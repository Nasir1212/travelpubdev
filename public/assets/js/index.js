function myFunction(x) {
 let slideing_img =  document.getElementsByClassName("slideing_img");
 let search_section_contaie  =  document.getElementsByClassName("search_section_contaie");
 let i=1;
 if (x.matches) { // If media query matches
      search_section_contaie[0].children[0].placeholder='where to ?';
     
      setInterval(function(){
        if(i== slideing_img.length) i=1;
        let slideCount = slideing_img.length /3;
          for (const iterator of slideing_img) {
            iterator.style.display='none'
          }
          slideing_img[i-1].style.display='block'
         i++;
        },2000)

    } else {
      setInterval(function(){
        if(i >= slideing_img.length) i=1;
          for (const iterator of slideing_img) {
            iterator.style.display='none'
          }
          slideing_img[i-1].style.display='block'
          slideing_img[i].style.display='block'
          slideing_img[i+1 == slideing_img.length ?2:i+1].style.display='block'
         

         i++;
        },2000)

    }
  }
  
  var x = window.matchMedia("(max-width: 567px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes

  document.getElementsByClassName("mobile_nav_icon")[0].addEventListener('click',function(){
    
    console.log(this.children)
    if(this.children[1].style.display =='none'){
        this.children[0].style.cssText=`transform: rotate(0deg);`;
        this.children[1].style.cssText=`display: block`;
        this.children[2].style.cssText=`transform: rotate(0deg); position: static;top: 20px;`;
        document.body.style.position = "static";
        document.getElementsByClassName("overly_section")[0].style.display='none'


    }else{
       this.children[0].style.cssText=`transform: rotate(45deg);`;
        this.children[1].style.cssText=`display: none`;
        this.children[2].style.cssText=`transform: rotate(-45deg); position: absolute;top: 20px;`;
        document.body.style.position = " fixed";
        document.getElementsByClassName("overly_section")[0].style.display='block'

    }
    
})