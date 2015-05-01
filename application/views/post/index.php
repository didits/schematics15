<script src="<?php echo base_url(); ?>bower_components/webcomponentsjs/webcomponents.min.js"></script>
<link rel="import" href="<?php echo base_url(); ?>bower_components/polymer/polymer.html">

<my-app></my-app>

<polymer-element name="form-test">
  <template>
    <form id="myForm" on-submit="{{ formSubmit }}">
      <input id="myInput" value="{{ someValue}}" name="text" on-focus="{{ inputFocus }}">
      <button id="submit" type="submit">Submit</button>
    </form>
  </template>
  <script>
    Polymer('form-test', {
      inputFocus: function(e) {
         this.fire('input-focus', this); 
      },
      submit: function() {
        this.$.submit.click(); 
      },
      formSubmit: function(e) {
        e.preventDefault();
        alert('FormSubmit trapped.');
      }
    });
  </script>
</polymer-element>

<polymer-element name="keyboard-test">
  <template>
     <style>:host { display: none; }</style>
    <button on-click="{{ submitKeyboard }}">Return button from keyboard</button>
  </template>
  <script>
    Polymer('keyboard-test', {
      input: null,
      open: function(form) {
        this.form = form;
        this.style.display = 'block';
      },
      submitKeyboard: function(e) {
        e.preventDefault();
        this.form.submit();
      }
    });
  </script>
</polymer-element>

<polymer-element name="my-app">
    <template>
      <form-test></form-test>
      <keyboard-test id="keyboard"></keyboard-test>
    </template>
    <script>
        Polymer('my-app', {
          ready: function() {
            var self = this;
            // Open keyboard whenever we focus an input.
            window.addEventListener('input-focus', this.openKeyboard.bind(this), true);
          },
          openKeyboard: function(e) {
            this.$.keyboard.open(e.detail);
          }
        });
  </script>
</polymer-element>