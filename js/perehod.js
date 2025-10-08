<script>
    function validateForm() {
        const agreementCheckbox = document.getElementById('agreement');
        const errorText = document.getElementById('agreement-error');
        if (!agreementCheckbox.checked) {
            errorText.style.display = 'block';
            return false; // Не отправляем форму
        } else {
            errorText.style.display = 'none';
            return true; // Отправляем форму
        }
    }
</script>
jQuery(document).ready(function() {
  jQuery("a.scrollto").click(function () {
    elementClick = jQuery(this).attr("href")
    destination = jQuery(elementClick).offset().top;
    jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
    return false;
  });
});