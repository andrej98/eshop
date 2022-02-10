// $('.amount-form input').on('change', function(){
//     $(this).closest('form').submit();
//     // let formData = new FormData([form]);
//     // formData.set('amount', 1)

// })

// $('.add').on('click', function(){
//     $(this).closest('form').submit();
// })

$('.single svg.plus').on('click', function() {
    if (document.querySelector('.single input[name="amount"]').value != 99)
        document.querySelector('.single input[name="amount"]').value++;
})

$('.single svg.minus').on('click', function() {
    if (document.querySelector('.single input[name="amount"]').value != 1)
        document.querySelector('.single input[name="amount"]').value--;
})

$('.cart-2 input[type="radio"]').on('change', function() {
    if ( $('input:radio:checked').length == 2 )
        $(this).closest('form').submit();

})

// $('main').hasClass(thi)
