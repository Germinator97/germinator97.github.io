document.getElementById("submit").addEventListener("click", function(e){
  e.preventDefault();

  $('#loader-1').css("display","");
  $('#loader-2').css("display","");
  $('#loader-3').css("display","");
  $('#submit-text').css("display","none");
  $('#submit').attr("disabled", "disabled");

  let name = $('#name').val();
  let email = $('#email').val();
  let subject = $('#subject').val();
  let message = $('#message').val();

  let uri = document.getElementById('form-contact').action;

  let xhr = http();

  xhr.onprogress = function (progress) { }

  xhr.onreadystatechange = function(state) {
    let DONE = (typeof XMLHttpRequest.DONE !== 'undefined') ? XMLHttpRequest.DONE : 4;

    if (xhr.readyState === DONE && xhr.status === 200) {
      let response = xhr.response;

      if (response.includes('CLIENT: 250 2.0.0 OK')) {
        displaySuccess('Email has sent successfully');
        button();
      }
      else {
        displayError('Email has not sent successfully');
        button();
      }
    }

    else if (xhr.readyState === DONE && xhr.status !== 200) {
      displaySuccess('Error');
      button();
    }

  };

  xhr.onload = function (load) { }

  xhr.onerror = function (error) { }

  xhr.open("POST", uri, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.send('name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message);
});

function button() {
  $('#loader-1').css("display","none");
  $('#loader-2').css("display","none");
  $('#loader-3').css("display","none");
  $('#submit-text').css("display","");
  $('#submit').removeAttr("disabled");
}

function displayError(message) {
  document.querySelector('.loading').classList.remove('d-block');
  document.querySelector('.error-message').innerHTML = message;
  document.querySelector('.error-message').classList.add('d-block');
}

function displaySuccess(message) {
  document.querySelector('.loading').classList.remove('d-block');
  document.querySelector('.sent-message').innerHTML = message;
  document.querySelector('.sent-message').classList.add('d-block');
}

function http() {
  let xmlhttp = null;

  if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    for (let a = ["MSXML2.XmlHttp.6.0", "MSXML2.XmlHttp.5.0", "MSXML2.XmlHttp.4.0", "MSXML2.XmlHttp.3.0", "MSXML2.XmlHttp.2.0", "Microsoft.XmlHttp"], b = 0; b < a.length; b++) {
      try {
        xmlhttp = new ActiveXObject(a[b]);
        break;
      } catch (error) {
        this.error.message = error.name;
        this.error.description = error.message;
        return;
      }
    }
    xmlhttp.setRequestHeader("Accept", "*/*");
  }

  return xmlhttp;
}