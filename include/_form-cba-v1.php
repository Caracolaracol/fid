<div class="tipddy-form-box" id="form-cba">
  <h3 class="tipddy-form-tit">Postula</h3>
  <div class="tipddy-form-p">
    Complete el formulario y un asesor se contactará con usted.
  </div>
  <form id="contact-form-landing">
    <?php wp_nonce_field('name_contact_form', 'name_contact_form_field'); ?>
    <div class="tipddy-form-container">
      <div class="tipddy-col-6">
        <!-- Full Name -->
        <label class="tipddy-label" for="fullname">Nombre Completo</label>
        <input class="tipddy-input" type="text" name="fullname" id="tipddy-fullname">
        <!-- Phone -->
        <label class="tipddy-label" for="phone">Teléfono (ej: +56911112222)</label>
        <input class="tipddy-input" type="number" name="phone" id="tipddy-phone">
        <!-- Nombre Institución -->
        <label class="tipddy-label" for="institution-name">Nombre Institución</label>
        <input class="tipddy-input" type="text" name="institution-name" id="tipddy-institution-name">
      </div>
      <div class="tipddy-col-6">
        <!-- Email -->
        <label class="tipddy-label" for="email">Correo electrónico</label>
        <input class="tipddy-input" type="email" name="email" id="tipddy-email">
        <!-- Rol de la Institución -->
        <label class="tipddy-label" for="role">Rol de la Institución</label>
        <input class="tipddy-input" type="text" name="role" id="tipddy-role">
        <!-- Institución -->
        <label class="tipddy-label" for="institution">Institución</label>
        <select class="tipddy-input" name="tipddy-institution" id="tipddy-institution">
          <option value="school">Colegio</option>
          <option value="otec">OTEC</option>
          <option value="college">Universidad</option>
          <option value="enterprise">Empresa</option>
          <option value="ministery">Ministerio</option>
        </select>
      </div>
    </div>
    <p class="tipddy-label form-group-tipddy">No soy un robot:</p>
    <?php
    $val1 = random_int(1, 20);
    $val2 = random_int(1, 20);
    ?>
    <div class="form-group-tipddy">
      <p class="tipddy-label" id="texto-suma"><?php echo $val1 . ' + ' . $val2 . ' = '; ?>
        <input style="width:20%;display:inline;" class="form-control form-est tipddy-input" type="text" name="suma" id="suma" value="" size="3" />
      <div class="error"></div>
      <input type="hidden" name="val1" id="val1" value="<?php echo $val1; ?>" />
      <input type="hidden" name="val2" id="val2" value="<?php echo $val2; ?>" />
      </p>
    </div>
    <div class="tipddy-form-p">
      Este formulario no confirma su registro, recibirá confirmación de
      nuestra administración
    </div>
    <input type="submit" class="tipddy-submit" value="Enviar" id="tipddy-submit" />
  </form>
  <div class="tipddy-snackbar error" id="tipddy-snack-error"></div>
  <div class="tipddy-snackbar success" id="tipddy-snack-success"></div>
</div>


<script>
  let tipForm = document.getElementById('contact-form-landing')
  let fullName = document.getElementById('tipddy-fullname')
  let phone = document.getElementById('tipddy-phone')
  let institutionName = document.getElementById('tipddy-institution-name')
  let email = document.getElementById('tipddy-email')
  let role = document.getElementById('tipddy-role')
  let institution = document.getElementById('tipddy-institution')
  let btnSubmit = document.getElementById('tipddy-submit')
  let success = document.getElementById('tipddy-snack-success')
  let error = document.getElementById('tipddy-snack-error')
  let num1 = document.getElementById('val1')
  let num2 = document.getElementById('val2')
  let suma = document.getElementById('suma')
  let ncff = document.getElementById('name_contact_form_field')

  let inputArray = [fullName, phone, institutionName, email, role, institution, suma]

  const validateEmailFormContacto = (email) => {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  };

  const validarSuma = () => {

    let a = Number(num1.value)
    let b = Number(num2.value)
    let s = Number(suma.value)

    if (s === "" || !s) {
      suma.style.border = "1px solid red"
      return false
    }

    if ((a + b) === s) {
      suma.style.border = "1px solid green"
      return true
    } else {
      suma.style.border = "1px solid red"
      return false
    }
  }

  tipForm.addEventListener('change', (e) => {
    if (e.srcElement.type === 'text' && e.target.value.length <= 3) {
      e.srcElement.style.border = '1px solid red'
    } else if (e.srcElement.type === 'text' && e.target.value.length > 3) {
      e.srcElement.style.border = '1px solid green'
    }

    if (e.srcElement.type === 'number' && e.target.value.length <= 8) {
      e.srcElement.style.border = '1px solid red'
    } else if (e.srcElement.type === 'number' && e.target.value.length > 8) {
      e.srcElement.style.border = '1px solid green'
    }

    if (e.srcElement.type === 'select-one' && e.target.value === "") {
      e.srcElement.style.border = '1px solid red'
    } else if (e.srcElement.type === 'select-one' && e.target.value !== "") {
      e.srcElement.style.border = '1px solid green'
    }

    if (e.srcElement.type === "email" && !validateEmailFormContacto(e.target.value)) {
      e.srcElement.style.border = '1px solid red'
    } else if (e.srcElement.type === "email" && validateEmailFormContacto(e.target.value)) {
      e.srcElement.style.border = '1px solid green'
    }

    if (e.srcElement.id === "suma" && !validarSuma()) {
      e.srcElement.style.border = '1px solid red'
    } else if (e.srcElement.id === "suma" && validarSuma()) {
      e.srcElement.style.border = '1px solid green'
    }
  })

  const activateSnackbar = (text, snackbar) => {
    snackbar.innerHTML = text;
    snackbar.style.left = "15px";
    setTimeout(() => {
      snackbar.style.left = "-500px";
      snackbar.innerHTML = "";
    }, 5000);
  }

  const clearFields = () => {
    inputArray.forEach(element => {
      element.style.border = '1px solid #000'
      element.value = ""
    });
    btnSubmit.value = "Enviar"
  }

  tipForm.addEventListener('submit', (e) => {
    let empty = false;
    let invalidInput = false;
    e.preventDefault();
    inputArray.forEach(e => {
      if (e.style.border === "1px solid red") {
        invalidInput = true;
      }
      if (e.value === "") {
        empty = true;
      }
    });
    if (!validarSuma()) {
      activateSnackbar("Suma Incorrecta, corregir para enviar", error)
      suma.style.border === "1px solid red"
      return
    }
    if (empty) {
      activateSnackbar("llene todos los campos", error)
      return
    }
    if (invalidInput) {
      activateSnackbar("Campo inválido, corregir para enviar", error)
      return
    }

    jQuery.ajax({
      type: "POST",
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        action: "iapp_ajax_cba_form",
        fullName: fullName.value,
        phone: phone.value,
        institutionName: institutionName.value,
        email: email.value,
        role: role.value,
        institution: institution.value,
        suma: suma.value,
        val1: num1.value,
        val2: num2.value,
        name_contact_form_field: ncff.value,
        source: 'fidetv'
      },
      dataType: "JSON",
      beforeSend: function() {
        btnSubmit.value = "Enviando . . ."
      },
      success: function(data) {
        activateSnackbar("Formulario enviado exitosamente", success)
        btnSubmit.value = "Enviado"
        setTimeout(() => {

          clearFields();
        }, 5000);
      },
      error: function(data, status) {
        activateSnackbar("Error al enviar formulario, favor contactar con soporte", error)
        btnSubmit.value = "Error"
        setTimeout(() => {

          clearFields();
        }, 5000);
        console.log({
          status,
          data
        })
      }

    });


  })
</script>