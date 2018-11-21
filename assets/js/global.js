$(function(){

	$('select').material_select()
	$('.button-collapse').sideNav()
	$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    })	

	var device = screen.width <= 400 ? 'Phone' : screen.width > 400 && screen.width < 1000 ? 'Tablet' : 'PC'
	//Materialize.toast(`<span class="red-text text-lighten-1"> <i class="material-icons left">wifi_off</i> Oops, your PC is offline! </span>`)

	$('.material-icons').not('.i').addClass('color')

	var color = 'deep-purple-text text-accent-2'
	var bg = 'deep-purple accent-2' 

	$('.color').addClass(color)
	$('.bg').addClass(bg)

})