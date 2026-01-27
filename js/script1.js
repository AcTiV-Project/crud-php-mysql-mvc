document.addEventListener('DOMContentLoaded', () => {
      const botones = document.querySelectorAll('.btn');
      const forms = document.querySelectorAll('.myform');

      botones.forEach(boton => {
            boton.addEventListener('click', () => {

                  // Ocultar todos los formularios
                  forms.forEach(form => form.classList.add('hidden'));

                  // Mostrar el formulario correcto
                  const tipo = boton.dataset.form;
                  const formActivo = document.querySelector(`.myform[data-form="${tipo}"]`);

                  formActivo.classList.remove('hidden');
            });
      });
});
