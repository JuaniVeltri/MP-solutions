/* Reemplaza por tu public_key */
Checkout.setPublishableKey("TEST-fcdac5c4-d20f-42a8-adcd-3913a5dd38d5");
$("#form-pagar-mp").submit(function (event) {
    var $form = $(this);
    Checkout.createToken($form, mpResponseHandler);
    event.preventDefault();
    return false;
});
var mpResponseHandler = function (status, response) {
    var $form = $('#form-pagar-mp');
    if (response.error) {
        console.log(response);
    } else {
        var card_token_id = response.id;
        $form.append($('<input type="hidden" id="card_token_id" name="card_token_id"/>').val(card_token_id));
        alert("card_token_id: " + card_token_id);
    }
}