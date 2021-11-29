export const removeScript = function () {
  const wpformsChoicesjsCss = document.querySelector("#wpforms-choicesjs-css");
  const wpformsJqueryTimepickerCss = document.querySelector(
    "#wpforms-jquery-timepicker-css"
  );
  const wpformsFlatpickrCss = document.querySelector("#wpforms-flatpickr-css");

  const wpformsChoicesjsJsExtra = document.querySelector(
    "#wpforms-choicesjs-js-extra"
  );
  const wpformsChoicesjsJs = document.querySelector("#wpforms-choicesjs-js");
  const wpformsValidationJs = document.querySelector("#wpforms-validation-js");
  const wpformsFlatpickrJs = document.querySelector("#wpforms-flatpickr-js");
  const wpformsJqueryTimepickerJs = document.querySelector(
    "#wpforms-jquery-timepicker-js"
  );
  const wpformsMaskedinputJs = document.querySelector(
    "#wpforms-maskedinput-js"
  );
  const wpformsMailcheckJs = document.querySelector("#wpforms-mailcheck-js");
  const wpformsPunycodeJs = document.querySelector("#wpforms-punycode-js");
  const wpformsPaymentJs = document.querySelector("#wpforms-payment-js");

  wpformsChoicesjsCss.remove();
  wpformsJqueryTimepickerCss.remove();
  wpformsFlatpickrCss.remove();
  wpformsChoicesjsJsExtra.remove();
  wpformsChoicesjsJs.remove();
  wpformsValidationJs.remove();
  wpformsFlatpickrJs.remove();
  wpformsJqueryTimepickerJs.remove();
  wpformsMaskedinputJs.remove();
  wpformsMailcheckJs.remove();
  wpformsPunycodeJs.remove();
  wpformsPaymentJs.remove();
};
