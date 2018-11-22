$(function(){



	 window.Alert = function(notifObject, callBack) {

	 	 let message = notifObject.message
	 	 let timeout = notifObject.timeout == undefined ? 10000 * 10000 : notifObject.timeout
	 	 let title	 = notifObject.title  == undefined ? App.name : notifObject.title
	 	 let action  = notifObject.action == undefined ? 'Okay' : notifObject.action
	 	 let cancel = ''

	 	 if ( callBack !== undefined ) {
	 	 	cancel = `<a class="modal-action modal-close waves-effect waves-grey btn-flat red-text text-lighten-1" data-notify-action="cancel">
	 	 			     <i class="material-icons left text-small">close</i>Cancel
	 	 			  </a>`
	 	 }

	 	 $('#notify').html(`
			<div id="notify-modal" class="modal modal-fixed-footer modal-small">
			    <div class="modal-content">
			      <h4 class='${App.color}'>${title}</h4>
			      <p>${message}</p>
			    </div>
			    <div class="modal-footer">
			      ${cancel}
			      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <a class="right modal-action modal-close waves-effect waves-grey btn-flat ${App.color}" data-notify-action="confirm">
			        <i class="material-icons left text-small">done</i>${action}
			      </a>
			    </div>
			</div>
	 	 `)

		 $('#notify-modal').modal({
		      dismissible: false, // Modal can be dismissed by clicking outside of the modal
		      opacity: .9, // Opacity of modal background
		      inDuration: 300, // Transition in duration
		      outDuration: 200, // Transition out duration
		      startingTop: '25%', // Starting top style attribute
		      endingTop: '25%', // Ending top style attribute 
		 })	 	 

	 	 $('#notify-modal').modal('open')

	 	 $('a[data-notify-action]').click(function(event){

	 	 	 if ( $(this).attr('data-notify-action') === 'confirm' && callBack !== undefined ) 
	 	 	 {
	 	 	 	callBack(true)
	 	 	 }
	 	 	 return true
	 	 })

	 	 setTimeout(function() { $('#notify-modal').modal('close') }, timeout * 1000)

	 }

	 window.Notify = function(notifArray){

	 	 let message = notifArray[0]
	 	 let type = notifArray[1] == undefined ? 'neutral' : notifArray[1]
	 	 let timeout = notifArray[2] == undefined ? 10000 * 10000 : notifArray[2]

	 	 let options = {

	 	 	 neutral : {
	 	 	 	color : 'white-text',
	 	 	 	icon : 'notifications'
	 	 	 },

	 	 	 success : {
	 	 	 	color : App.color,
	 	 	 	icon  : 'thumb_up'
	 	 	 },
	 	 	 error : {
	 	 	 	color : 'red-text text-lighten-1',
	 	 	 	icon  : 'error'
	 	 	 }
	 	 }

	 	 Materialize.toast(`<span class="${options[type].color}"> <i class="material-icons left">${options[type].icon}</i>${message}</span>`, timeout * 1000, 'rounded')
	 }

	/*Alert({
	 	 message : 'Your order for the meal Fufu &amp; Eru has been received. We\re getting it ready. See you soon, Antipas.',
	 	 title : 'Order',
	 	 timeout : 200,
	 	 action : 'Yes', 
	},function(){
		alert('you confirmed it')
	})*/

	//Notify([ 'Your device is back online!','neutral', 10 ])	 

})