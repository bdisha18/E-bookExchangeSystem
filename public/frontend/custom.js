// filter products
$(document).on('click','.button-format',function(){
    var items = $(this).data('filter');
    console.log(items);
    if(items == 'all'){
      $('.data-items').show();
    }else{
      $('.data-items').hide();
      $('.'+items).show();
    }
  });

// carousel slider
$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

//  TESTIMONIALS CAROUSEL HOOK
$('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                dots:true,
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1170: {
                    items: 3
                  }
                }
  });

 // Navbar during scrolling

  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $(".container").css({"background" : "#9c97bb", "margin-top" : "0px"});
      $(".main").css("");
    }else{
      $(".container").css({"background" : "#00000040", "margin-top" : "10px"});   
    }
  });

// publish gallery book

  (function () {
    var logo, logo_css;
    logo = '<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title>codepen-logo</title><path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zM7.139 21.651l1.35-1.35a.387.387 0 0 0 0-.54l-3.49-3.49a.387.387 0 0 0-.54 0l-1.35 1.35a.39.39 0 0 0 0 .54l3.49 3.49a.38.38 0 0 0 .54 0zm6.922.153l2.544-2.543a.722.722 0 0 0 0-1.018l-6.582-6.58a.722.722 0 0 0-1.018 0l-2.543 2.544a.719.719 0 0 0 0 1.018l6.58 6.579c.281.28.737.28 1.019 0zm14.779-5.85l-7.786-7.79a.554.554 0 0 0-.788 0l-5.235 5.23a.558.558 0 0 0 0 .789l7.79 7.789c.216.216.568.216.785 0l5.236-5.236a.566.566 0 0 0 0-.786l-.002.003zm-3.89 2.806a.813.813 0 1 1 0-1.626.813.813 0 0 1 0 1.626z" fill="#FFF" fill-rule="evenodd"/></svg>';
    logo_css = '.mM{display:block;border-radius:50%;box-shadow:0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);position:fixed;bottom:1em;right:1em;-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:all 240ms ease-in-out;transition:all 240ms ease-in-out;z-index:9999;opacity:0.75}.mM svg{display:block}.mM:hover{opacity:1;-webkit-transform:scale(1.125);transform:scale(1.125)}';
    document.head.insertAdjacentHTML('beforeend', '<style>' + logo_css + '</style>');
    document.body.insertAdjacentHTML('beforeend', '<a href="https://codepen.io/mican/" target="_blank" class="mM">' + logo + '</a>');
  });


// Toggle the address create bar

 $(".address-box").click(function(){
    $(".address-form").toggle();
  });


 // Address Model Edit Form

 $(document).on("click", ".edit-modalbtn", function() {
  var id = $(this).val();  
  url = ""+id;
  $.ajax({
    url: url,
    method: "get"    
  }).done(function(response) {
    //Setting input values
    $("input[name='id']").val(id);
    $("input[name='name']").val(response.name);
    $("input[name='type']").val(response.type);
    $("input[name='address']").val(response.address);
    $("input[name='pincode']").val(response.pincode);
    $("input[name='contactno']").val(response.contactno);

    //Setting submit url
    $("modal-form").attr("action","/address/update/"+id)
  });
});

 $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

 // adding new Form

// $(function () {
//     var duplicates = 0,
//         $original = $('.form-content').clone(true);

//     function DuplicateForm () {
//         var max_fields      = 4; //maximum input boxes allowed
//         var wrapper       = $(".remove-form-btn"); //Fields wrapper
//         var newForm;

//         if(duplicates < max_fields){
//           duplicates++; 

//           newForm = $original.clone(true).insertBefore($('.button-container'));

//         $.each($('input', newForm), function(i, item) {            
//             $(item).attr('name', $(item).attr('name') + duplicates);
//         });
//              $(wrapper).css('display', 'inline');
//       }

//         // $('<h2>Book ' + (duplicates + 1) + '</h2>').insertBefore(newForm);
//     }

//     $(document).on('click', '.addNewForm', function (e) {
//         e.preventDefault();
//         DuplicateForm();
//     });

//     $(wrapper).on("click",".remove-form-btn", function(e){ //user click on remove text
//     e.preventDefault(); 
//     $(this).parent('div').remove();
//     duplicates--;
//   });
// });

$(document).on('click','.addNewForm',function(){
  if($('.cloneContent').length <= 4){
var cloneContent = $('.cloneContent').html();
var html = '<div class="form-content cloneContent">'+cloneContent+'</div>';
$('.containerArea').append(html);
$('.remove-form-btn').css('display', 'inline');
  }
  });


$('.form-content').on('click', '.remove-form-btn', function(e){
e.preventDefault();
$(this).parent('div').remove();
});


// Newsletter

$('#newsletter').on('submit', function(e){
  e.preventDefault();
  alert('fdvdf');
  var email= $('input[name ="email"]').val();
  var url = $(this).data('url');
  if(!email){
    alert('email is required');
  }
  $.get(url, {email: email}, function(response){
    if(response.status){
      alert(response.message);
    }
  });
  $('input[name = "email"]').val();

});

// Whishlisted Items

$(document).on('click', '.favoriteIcon', function(){
var id = $(this).data('id');
var url = $(this).data('url');
var token = $('input[name = "_token"]').val();
$('.product-img').removeClass('active');
$(this).addClass('active');
$.post(url, {_token: token, id:id}, function (response) {
  if(response.success){
  $('.product-img').css('color', '#a0748a');
  }
  
});
});

// Select Address during Payment

$(document).on('click', '.address-control', function(){
  alert('gb');
var id = $(this).data('id');
var url = $(this).data('url');
var token = $('input[name = "_token"]').val();
$(this).addClass('selected');
$.post(url, {_token: token, id: id}, function (response){

});
});

