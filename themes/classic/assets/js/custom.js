/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
function aClickList(id, id_product) {
    $(".cart-content-btn #addPanierBtn").removeAttr('disabled');
    $("#listPanierGarnis .card_panier").removeClass("selected"); 
    $(id).addClass("selected");
    $('.cart-content-btn #product_page_product_id').val(id_product);
    return false;
}