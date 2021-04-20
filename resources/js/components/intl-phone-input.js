
import intlTelInput from "intl-tel-input";
import telUtils from "intl-tel-input/build/js/utils";

var input = document.querySelector("#phone");

var iti = intlTelInput(input, {
    utlisScript: telUtils,
    initialCountry:"cl",
    placeholderNumberType:"MOBILE",
    formatOnDisplay:true,
    onlyCountries: ['cl'],
    allowDropdown:false,
    separateDialCode:true,
    customPlaceholder:true,
});
