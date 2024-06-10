document.addEventListener('DOMContentLoaded', (event) => {
    //  HTML del modal  añadido al cuerpo del documento
    const modalHTML = `
      <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="imageModalLabel">Image Title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="" class="modal-img" alt="">
            </div>
          </div>
        </div>
      </div>
    `;
    document.body.insertAdjacentHTML('beforeend', modalHTML);
  
    // lógica para manejar el evento de mostrar el modal
      const imageModal = document.getElementById('imageModal');
      imageModal.addEventListener('show.bs.modal', (event) => {
      const button = event.relatedTarget;
      const title = button.getAttribute('data-title');
      const img = button.getAttribute('data-img');
  
      const modalTitle = imageModal.querySelector('.modal-title');
      const modalImage = imageModal.querySelector('.modal-img');
  
      modalTitle.textContent = title;
      modalImage.src = img;
      modalImage.alt = title;
    });
  });




  
// Primero, se crea una cadena con el HTML del modal y se inserta al final del cuerpo del documento usando document.body.insertAdjacentHTML('beforeend', modalHTML).
// Luego, se añade un listener para el evento show.bs.modal del modal de Bootstrap, que actualiza el contenido del modal dinámicamente.
// Archivo HTML:

// Incluye la estructura de las tarjetas de imágenes.
// Cada tarjeta de imagen tiene atributos data-title y data-img para proporcionar la información que se mostrará en el modal.