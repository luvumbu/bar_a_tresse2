<div class="section-1" id="section-1">
 <p class="section-1-text police1">
    Bienvenue sur le site 'bar à tresses', votre salon de béaute à lille.
     Votre beauté est notre seul mot d'ordre. Nous proposons à notre clientèle une palette de services variés, 
     une écoute et un conseil professionnel et personnalisé. Chez nous, vous pourrez vous faire coiffer, épiler, 
     poser des ongles, poser des extensions de cils... Nous sommes là pour vous chouchouter, et pour que vous 
     passiez un moment de détente et de bien-être absolu. 
     Laissez-vous dorloter par nos experts qui vous prodigueront de nombreux conseils en matière de beauté.
               
 </p>
 
  </div>
 
 
  <style>
     .police1{
        font-size:1.2em; 
     }
     #section-1{
       
        background-repeat: no-repeat;
        height:400px;
        background-position:100%;
        background-color:#372535 ; 
        padding:30px;
        text-align:justify ; 
     }
     .section-1-photo,.section-2-photo,.section-3-photo,.section-4-photo,.section-5-photo{
        transition:1s all;
     }
     .section-1-photo{
      background-image:url("src/img/00_photos qui defilent/400 bis.jpg");
     }
     .section-2-photo{
      background-image:url("src/img/00_photos qui defilent/400 cinq.jpg");
     }
     .section-3-photo{
      background-image:url("src/img/00_photos qui defilent/400 qua.jpg");
     }
     .section-4-photo{
      background-image:url("src/img/00_photos qui defilent/400 ter.jpg");
     }
     .section-5-photo{
      background-image:url("src/img/00_photos qui defilent/400.jpg");
     }

     .section-1-text{
        width:40%; 
        margin:auto; 
        color:white ; 
        position:relative; 
        top:60px; 
     }

     @media screen and (max-width: 1280px)
{
   #section-1{
        background-image:url("");
        height:2000px;
        font-size:2em;
 
     }
     .section-1-text{
        width:90%; 
        margin:auto; 
        color:white ; 
     }
}
  </style>

<script>
let  randomw= parseInt( Math.random()*5, 10) ;


 


 const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
 
   switch(randomw) {
      case 0:
    document.getElementById("section-1").className='section-1-photo';
    console.log(randomw);
    break;
  case 1:
    document.getElementById("section-1").className='section-1-photo';
    console.log(randomw);
    break;

    case 2:
    document.getElementById("section-1").className='section-2-photo';
    console.log(randomw);
    break;

    case 3:
    document.getElementById("section-1").className='section-3-photo';
    console.log(randomw);
    break;

    case 4:
    document.getElementById("section-1").className='section-4-photo';
    console.log(randomw);
    break;

      case 5:
    document.getElementById("section-1").className='section-5-photo';
    console.log(randomw);
    break;
 
    
}



const element = document.getElementById("demo");

setInterval(function() {
  
   randomw= parseInt( Math.random()*5, 10) ;
   switch(randomw) {
      case 0:
    document.getElementById("section-1").className='section-1-photo';
    console.log(randomw);
   
    break;
  case 1:
    document.getElementById("section-1").className='section-1-photo';
    console.log(randomw);
   
    break;

    case 2:
    document.getElementById("section-1").className='section-2-photo';
    console.log(randomw);
   
    break;

    case 3:
    document.getElementById("section-1").className='section-3-photo';
    console.log(randomw);
   
    break;

    case 4:
    document.getElementById("section-1").className='section-4-photo';
    console.log(randomw);
   
    break;

      case 5:
    document.getElementById("section-1").className='section-5-photo';
    console.log(randomw);
    
    break;
 
    
}
}
   
   , 1500);


 
}

</script>
 

