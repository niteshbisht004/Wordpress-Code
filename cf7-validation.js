<script>
	function handleInputValidation(className, regex) {
  const inputElement = document.querySelector(className);
  inputElement.addEventListener("input", function() {
    if (this.value.match(regex)) {
      this.value = this.value.replace(regex, '');
    } else {
      const errorElement = document.querySelector(".wpcf7-not-valid-tip");
      errorElement.textContent = "";
    }
  });
}
handleInputValidation(".mycartnum", /[^0-9\+]/g);
handleInputValidation(".contactnum", /[^0-9\+]/g);
handleInputValidation(".yourname", /[^a-zA-Z]/g);
handleInputValidation(".cartname", /[^a-zA-Z\s]/g);
handleInputValidation(".cartcity", /[^a-zA-Z\s]/g);
handleInputValidation(".cartstate", /[^a-zA-Z]/g);
handleInputValidation(".enter-promo", /[^a-zA-Z]/g);

handleInputValidation(".city_1", /[^a-zA-Z]/g);
handleInputValidation(".yourname_1", /[^a-zA-Z]/g);
handleInputValidation(".contactnum_1", /[^0-9\+]/g);
handleInputValidation(".cartcode", /[^0-9\+]/g);
handleInputValidation(".warentynum", /[^0-9\+]/g);
handleInputValidation(".post-code", /[^0-9\+]/g);

handleInputValidation(".your-name", /[^a-zA-Z]/g);
handleInputValidation(".last-name", /[^a-zA-Z]/g);
handleInputValidation(".color-range", /[^a-zA-Z\s]/g);
handleInputValidation(".city-name", /[^a-zA-Z\s]/g);
handleInputValidation(".state-name", /[^a-zA-Z\s]/g);
handleInputValidation(".color-range", /[^a-zA-Z\s]/g);

</script>