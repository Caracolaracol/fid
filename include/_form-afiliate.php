<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
  <div class="row">
    <div class="col-md-12">
      <h1 class="tit-segundario">Afíliate</h1>
      <h2 class="texto-generico">
        El principal y más importante servicio de FIDE a sus afiliados y a la Educación Particular, es la defensa gremial de los colegios,
        salas cunas y jardines infantiles, a través de mesas de trabajo con el Ministerio de Educación, una activa participación en el
        Congreso Nacional y con la elaboración de propuestas que mejoren las políticas públicas.
      </h2>
    </div>
  </div>
</div>
<div class="container-tipddy vacio"></div>
<form id="contact-form-landing">
  <?php wp_nonce_field('name_contact_form', 'name_contact_form_field'); ?>
  <div id="forms-container">
    <div class="tipddy-form-container">
      <div class="tipddy-col-6">
        <!-- Full Name -->
        <label class="tipddy-label" for="fullname">Nombre Completo</label>
        <input class="tipddy-input" type="text" name="fullname" id="tipddy-fullname">
        <!-- Email -->
        <label class="tipddy-label" for="email">Correo electrónico</label>
        <input class="tipddy-input" type="email" name="email" id="tipddy-email">
      </div>
      <div class="tipddy-col-6 tipddy-right-col">
        <!-- Phone -->
        <label class="tipddy-label" for="phone">Teléfono (ej: +56911112222)</label>
        <input class="tipddy-input" type="number" name="phone" id="tipddy-phone">
        <!-- Asunto -->
        <label class="tipddy-label" for="institution">Institución</label>
        <input class="tipddy-input" type="text" name="institution" id="tipddy-institution">
      </div>
    </div>
  </div>
  <div class="tipddy-form-container2">
    <div>
      <p class="tipddy-label tipddy-form-group tipddy-label-remove">Quitar un usuario</p>
      <input type="button" class="tipddy-remove" value="&#x2212;" id="tipddy-remove" disabled />
    </div>
    <div>
      <p class="tipddy-label tipddy-form-group tipddy-label-add">Añadir otro usuario</p>
      <input type="button" class="tipddy-add" value="&#x271A;" id="tipddy-add" />
    </div>
  </div>
  <p class="tipddy-label tipddy-form-group">No soy un robot:</p>
  <?php
  $val1 = random_int(1, 20);
  $val2 = random_int(1, 20);
  ?>
  <div class="tipddy-form-group">
    <p class="tipddy-label" id="texto-suma"><?php echo $val1 . ' + ' . $val2 . ' = '; ?>
      <input style="width:20%;display:inline;" class="form-control form-est tipddy-input" type="text" name="suma" id="suma" value="" size="3" />
    <div class="error"></div>
    <input type="hidden" name="val1" id="val1" value="<?php echo $val1; ?>" />
    <input type="hidden" name="val2" id="val2" value="<?php echo $val2; ?>" />
    </p>
  </div>
  <div class="tipddy-label" style="margin-top:0;text-align:center;">
    <span>
      ¡Gracias por tu interés! Un persona de nuestro equipo se pondrá en contacto contigo muy pronto para brindarte más detalles
    </span>
  </div>
  <input type="submit" class="tipddy-submit" value="Postular" id="tipddy-submit" />
</form>
<div class="tipddy-snackbar error" id="tipddy-snack-error"></div>
<div class="tipddy-snackbar success" id="tipddy-snack-success"></div>

<script>
  let tipForm = document.getElementById('contact-form-landing')
  let fullName = document.getElementById('tipddy-fullname')
  let email_contact_form = document.getElementById('tipddy-email')
  let phone = document.getElementById('tipddy-phone')
  let institution = document.getElementById('tipddy-institution')
  let btnSubmit = document.getElementById('tipddy-submit')
  let success = document.getElementById('tipddy-snack-success')
  let error = document.getElementById('tipddy-snack-error')
  let num1 = document.getElementById('val1')
  let num2 = document.getElementById('val2')
  let suma = document.getElementById('suma')
  let ncff = document.getElementById('name_contact_form_field')


  let initalInputArray = [fullName, email_contact_form, phone, institution, suma]
  let inputArray = []
  let inputsCN = ['tipddy-fullname', 'tipddy-email', 'tipddy-phone', 'tipddy-institution']

  /* Inicio logica para añadir mas usuarios */
  let add_btn = document.getElementById('tipddy-add')
  let remove_btn = document.getElementById('tipddy-remove')
  let formCounter = 2;
  let fcmax = 4;
  let fcmin = 2;

  const manageDisabled = (fc) => {
    console.log({
      fc
    })
    if (fc === fcmax) {
      add_btn.disabled = true
    }
    if (fc < fcmax) {
      add_btn.disabled = false
    }
    if (fc === fcmin) {
      remove_btn.disabled = true
    }
    if (fc > fcmin) {
      remove_btn.disabled = false
    }
  }

  add_btn.addEventListener('click', () => {
    if (formCounter === fcmax) return;
    const container = document.createElement('div');
    container.className = `tipddy-form-container tipddy-top-line user-${formCounter}`;

    container.innerHTML = `
                <div class="tipddy-col-6">
                    <!-- Full Name -->
                    <label class="tipddy-label" for="fullname${formCounter}">Nombre Completo</label>
                    <input class="tipddy-input" type="text" name="fullname${formCounter}" id="tipddy-fullname${formCounter}">
                    <!-- Email -->
                    <label class="tipddy-label" for="email${formCounter}">Correo electrónico</label>
                    <input class="tipddy-input" type="email" name="email${formCounter}" id="tipddy-email${formCounter}">
                </div>
                <div class="tipddy-col-6 tipddy-right-col">
                    <!-- Phone -->
                    <label class="tipddy-label" for="phone${formCounter}">Teléfono (ej: +56911112222)</label>
                    <input class="tipddy-input" type="number" name="phone${formCounter}" id="tipddy-phone${formCounter}">
                    <!-- Asunto -->
                    <label class="tipddy-label" for="institution${formCounter}">Institución</label>
                    <input class="tipddy-input" type="text" name="institution${formCounter}" id="tipddy-institution${formCounter}">
                </div>
            `;

    document.getElementById('forms-container').appendChild(container);
    formCounter++;
    manageDisabled(formCounter)
  })

  remove_btn.addEventListener('click', () => {
    if (formCounter === fcmin) return;
    let lastUser = document.querySelector(`.user-${formCounter - 1}`)

    if (lastUser) {
      lastUser.remove()
      formCounter--;
      manageDisabled(formCounter)
    } else {
      console.log('lastUser no existe', lastUser)
    }

  })
  /* Fin logica para añadir mas usuarios*/

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
    btnSubmit.disabled = false;
  }

  const generateData = () => {
    let final = {
      action: "iapp_ajax_contact_form",
      fullName1: fullName.value,
      email1: email_contact_form.value,
      phone1: phone.value,
      institution1: institution.value,
      suma: suma.value,
      val1: num1.value,
      val2: num2.value,
      name_contact_form_field: ncff.value,
    }
    if (formCounter > fcmin) {
      if (formCounter >= 3) {
        final = {
          ...final,
          fullName2: inputArray[5].value,
          email2: inputArray[6].value,
          phone2: inputArray[7].value,
          institution2: inputArray[8].value,
        }
      }
      if (formCounter >= fcmax) {
        final = {
          ...final,
          fullName3: inputArray[9].value,
          email3: inputArray[10].value,
          phone3: inputArray[11].value,
          institution3: inputArray[12].value,
        }
      }
    }
    console.log({
      datosEnvio: final,
      inputArray
    })
    return final;
  }

  tipForm.addEventListener('submit', (e) => {
    let empty = false;
    let invalidInput = false;
    console.log('enviado', e)
    e.preventDefault();
    e.submitter.disabled = true;

    if (formCounter > fcmin) {
      inputArray = initalInputArray
      for (let i = fcmin; i < formCounter; i++) {
        inputsCN.forEach((e) => {
          let htmlTag = document.getElementById(`${e + i}`)
          inputArray.push(htmlTag)
        })
      }
    }
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
      e.submitter.disabled = false;
      return
    }
    if (empty) {
      activateSnackbar("llene todos los campos", error)
      e.submitter.disabled = false;
      return
    }
    if (invalidInput) {
      activateSnackbar("Campo inválido, corregir para enviar", error)
      e.submitter.disabled = false;
      return
    }
    finalData = generateData();
    // return 'evitar envio para test'
    jQuery.ajax({
      type: "POST",
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: finalData,
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

        console.log({
          status,
          data
        })
      }

    });


  })
</script>