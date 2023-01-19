const onglets=document.querySelectorAll('a .nav-link')
let index=0;
onglets.forEach(onglet=>{
    onglet.addEventListener('click',()=>{
        if(onglet.classList.contains('active')){
            return;
        }else{
            onglet.classList.add('active');
        }
        index=onglet.getAttribute('data-anim');
        console.log(index)
        for(i=0; i<onglets.length;i++){
            if(onglets[i].getAttribute('data-anim')!=index){
                onglets[i].classList.remove('active');
            }
        }
    })
})
 