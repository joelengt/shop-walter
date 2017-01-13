/**
 * Funciones para popups
 */
function showPopup(id)
{
	$('#'+id).fadeIn();
	$('#blackout').fadeIn();

}
function closePopup(id)
{
	$('#'+id).fadeOut();
	$('#blackout').fadeOut();
}
