<div class="form-contact contact-form-sec">
  <div class="form-popup-bg_1">
    <div class="form-container">
      <button id="btnCloseForm" class="close-button" onclick="closeForm()">X</button>
      <?php echo do_shortcode('[contact-form-7 id="2622" title="Request Quote"]');?>
    </div>
  </div>
</div>

<!-- Add this snippet code in footer -->
<div class="popup-form">
[code_snippet id=5]
</div>
<!--  -->

<script>
function closeForm() {
	jQuery('.form-popup-bg_1').removeClass('is-visible');
}

jQuery(document).ready(function($) {

	jQuery(document).on('click', '.popup_button,.trusted_popup_button,.about_popup_button', function(event) {
		event.preventDefault();
		jQuery('.form-popup-bg_1').addClass('is-visible');
	});
  //close popup when clicking x or off popup
  jQuery('.form-popup-bg_1').on('click', function(event) {
  if (jQuery(event.target).is('#btnCloseForm')) {
    event.preventDefault();
    jQuery(this).removeClass('is-visible');
  }
});
	
});
</script>
<style>
.form-contact .form-popup-bg_1
 {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	display: flex;
	flex-direction: column;
	align-content: center;
	justify-content: center;
	padding: 30px;
}

.form-contact .form-popup-bg_1 {
	position: fixed;
	left: 0;
	top: 0;
	height: 100%;
	width: 100%;
	background-color: rgba(94, 110, 141, 0.9);
	opacity: 0;
	visibility: hidden;
	transition: opacity 0.3s 0s, visibility 0s 0.3s;
	overflow-y: auto;
	z-index: 10000;
}


.form-contact .form-popup-bg_1.is-visible {
	opacity: 1;
	visibility: visible;
	transition: opacity 0.3s 0s, visibility 0s 0s;
}

.form-contact .form-container {
	background-color: #fff;
	border-radius: 0px;
	box-shadow: 1px 1px 3px 0px rgba(0, 0, 0, 0.050980392156862744);
	display: flex;
	flex-direction: column;
	width: 100%;
	max-width: 650px;
	margin-left: auto;
	margin-right: auto;
	position: relative;
	padding: 30px;
	overflow-x: auto;
	color: #fff;
}

.form-contact .close-button {
	background: none;
	color: #6f6f6f;
	position: absolute;
	top: 0;
	right: 0px;
	border: none;
	border-radius: 0px;
	font-size: 1.5rem;
}


.form-contact .form-popup-bg_1:before {
	content: '';
	background-color: #fff;
	opacity: 0.25;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}
</style>