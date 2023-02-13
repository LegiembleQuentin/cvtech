$(window).on('load',function () {
    $('#diapoow3').flexslider({
         animation: "slide",
         controlNav: false,
         directionNav: true,
         animationLoop: false,
         itemWidth: 210,
         itemMargin: 5
     });
 });

 const team = [
     {
         name: "Quentin",
         firstName: "Legiemble",
         age: 22,
         job: "Developpeur Fullstack",
         desc: "La collaboration est la clé pour faire un excellent travail."
     },
     {
         name: "Prince",
         firstName: "Petyth",
         age: 23,
         job: "Developpeur Fullstack",
         desc: "Nous former une équipe inarrêtable."
     },
     {
         name: "Theo",
         firstName: "Lemettais",
         age: 21,
         job: "Developpeur Fullstack",
         desc: "c'est en équipe que nous allons plus loin."
     },
     {
         name: "Lucas",
         firstName: "Eliot",
         age: 20,
         job: "Developpeur Fullstack",
         desc: "L'union fait la force."
     }
 ];

 const images2 = document.querySelectorAll('.img img');
 const name = document.querySelector('.nom_prenom p:first-of-type');
 const firstName = document.querySelector('.nom_prenom p:last-of-type');
 const age = document.querySelector('.age_job p:first-of-type');
 const job = document.querySelector('.age_job p:last-of-type');
 const desc = document.querySelector('.desc p');
 const profilImage = document.querySelector('.img_profil img');

 images2.forEach((image, index) => {
     image.addEventListener('mouseover', () => {
         const member = team[index];
         name.textContent = "Nom :  " + member.name;
         firstName.textContent = "Prénom :  " + member.firstName;
        age.textContent = "Age :  " + member.age + " ans";
        job.textContent = member.job;
        desc.textContent = member.desc;
         profilImage.src = image.src;
      });
 });

 $('.dropdown i').click(function(e) {
     $('.dropdown-content').toggle();
     $(this).toggleClass("fa-chevron-up fa-chevron-down");
     e.stopPropagation();
 });

 $('.dropdown-content a').click(function() {
     var text = $(this).text();
     var href = $(this).attr("href");
     $('.dropdown .replace').text(text);
     $('.dropdown .replace').attr("href", href);
     $('.dropdown-content').toggle();
   $('.dropdown i').toggleClass("fa-chevron-up fa-chevron-down");
});

 $(document).click(function() {
     $('.dropdown-content').hide(); 
    $('.dropdown i').removeClass("fa-chevron-up").addClass("fa-chevron-down");
});

