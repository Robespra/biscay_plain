import React from 'react'

if (typeof window !== `undefined`) {
function validate(name, email, honeypot) {
  // we are going to store errors for all fields
  // in a signle array
  const errors = [];

  if (name.length === 0) {
    errors.push("Name can't be empty");
  }

  if (email.length < 5) {
    errors.push("Email should be at least 5 charcters long");
  }
  if (email.split("").filter(x => x === "@").length !== 1) {
    errors.push("Email should contain a @");
  }
  if (email.indexOf(".") === -1) {
    errors.push("Email should contain at least one dot");
  }

  if (honeypot.length > 1) {
    errors.push("Sorry motherboter, can't send your message");
  }

  return errors;
}
window.onload=function(){
  const sendButton = document.getElementById('send-button')

  const formDataToJson = formData => {
    const entries = formData.entries();

    const dataObj = Array.from(entries).reduce( (data, [key, value]) => {
      data[key] = value;
      if (key === 'email') {
        data._replyTo = value;
      }
      return data;
    }, {});
    return JSON.stringify(dataObj);
  };

  const postToFormspree = formData => fetch(`https://formspree.io/mnbblykm`, {
    method: 'POST',
    body: formDataToJson(formData),
    headers: {
      'Content-Type': 'application/json'
    }
  }).then(r => r.json());

  document.getElementById('contactForm').addEventListener('submit', function (e) {

    e.preventDefault();

    sendButton.value = 'Sending..';

    const formData = new FormData(this);

    postToFormspree(formData).then(response => {
        sendButton.value = 'email registered, thank you!';
        this.reset();

    });
  });

}
}

