  $(document).ready(function() {
    $('a.smoothscroll').click(function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      var parts = href.match(/(\#[a-zA-Z0-9-_]+)/);
      var className = parts[1].substring(1);
      document.querySelector('.'+className).scrollIntoView({
        behavior: 'smooth'
      });
    });

    $(window).scroll(function(){
      if ($(this).scrollTop() >= $('.navbar-spectech').height()){
        $('.up').show();
        }
        else {
          $('.up').hide();
        }
    });


    $('button.btn-order').click(function(e) {
      var $divMechItem = $(this).parent().parent();
      var mechTitle = $divMechItem.find('.title').text();
      console.log(mechTitle);
      var $modalOrder = $('#modal-order');
      $modalOrder.find('input[name="interest"]').val(mechTitle);
    });



    var headerAjaxLoader = new Image();
    headerAjaxLoader.src = '/img/ajax-loader.gif';

    $('#frm-hero, #frm-contacts, #frm-order').on('submit', function (e) {
      console.log('frm-hero posting attempt...');

      if (e.preventDefault) e.preventDefault(); else e.returnValue = false;

      var $form = $(this);
      var data = $form.serialize();

      // Let's select and cache all the fields
      var inputs = $form.find("input, select, button, textarea");
      inputs.prop('disabled', true);

      // ajax loader gif
      var submitButton = $form.find('button.btn-primary');
      var btnContent = submitButton.html();
      submitButton.empty();
      submitButton.append(headerAjaxLoader);

      $.ajax({
        url: '/ajax/order.php',
        dataType: 'json',
        type: 'POST',
        'data': data
      }).done(function (data, textStatus, jqXHR) {
        console.log(data);

        if (data.errorCode == 0) {
          console.log('success!');

          $('#modal-success').modal('show');
        }
        else {
          //console.error(data.errorMessage);
          //alert(data.errorMessage);
        }
      }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error(textStatus + "\r\n" + jqXHR.responseText);

        $('#modal-error').modal('show');
      }).always(function () {
        // Reenable the inputs
        inputs.prop("disabled", false);
        submitButton.empty();
        submitButton.html(btnContent);
      });

      return false;
    });
  });
