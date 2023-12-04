function validarProducto(event) {
    console.log('La función validarProducto se está ejecutando.');

    // Obtener referencias a los campos del formulario
    var nombre = document.getElementById('nombre');
    var descripcion = document.getElementById('descripcion');
    var precio = document.getElementById('precio');
    var categoria = document.getElementById('categoria');
    var cantidad = document.getElementById('cantidad');
    var peso = document.getElementById('peso');
    var medida = document.getElementById('medida');
    var imgProducto = document.getElementById('imgProducto');

    // Verificar si los campos están vacíos o son nulos/undefined
    if (!nombre.value) {
        nombre.classList.add('error');
    } else {
        nombre.classList.remove('error');
    }

    // Verificar si la descripción está vacía o supera los 255 caracteres
    if (!descripcion.value) {
        descripcion.classList.add('error');
    } else {
        descripcion.classList.remove('error');
    }

    if (categoria.value === 'noSeleccionado') {
        categoria.classList.add('error');
    } else {
        categoria.classList.remove('error');
    }

    // Validar que los campos de precio, cantidad y peso sean mayores que 0
    if (isNaN(parseDouble(precio.value)) || parseDouble(precio.value) <= 0) {
        precio.classList.add('errorbordeCant');
    } else {
        precio.classList.remove('errorbordeCant');
    }

    if (isNaN(parseFloat(cantidad.value)) || parseFloat(cantidad.value) <= 0) {
        cantidad.classList.add('errorbordeCant');
    } else {
        cantidad.classList.remove('errorbordeCant');
    }

    if (isNaN(parseDouble(peso.value)) || parseDouble(peso.value) <= 0) {
        peso.classList.add('errorbordeCant');
    } else {
        peso.classList.remove('errorbordeCant');
    }

    // Obtener el valor de #medida desde el contenedor .pesoNeto
    var medidaValor = medida.value;

    // Verificar si se ha seleccionado un valor para el campo de medida
    if (medidaValor === 'noSeleccionado') {
        medida.classList.add('errormedidaCant');
    } else {
        medida.classList.remove('errormedidaCant');
    }

    // Verificar si se ha seleccionado un archivo para el campo de la imagen
    if (!imgProducto.files || imgProducto.files.length === 0) {
        imgProducto.classList.add('error');
    } else {
        imgProducto.classList.remove('error');
    }

    // Realizar el registro si todos los campos están completos
    if (nombre.value && descripcion.value && categoria.value !== 'noSeleccionado' && medidaValor !== 'noSeleccionado' && imgProducto.files && imgProducto.files.length > 0 &&
        !precio.classList.contains('errorbordeCant') &&
        !cantidad.classList.contains('errorbordeCant') &&
        !peso.classList.contains('errorbordeCant')) {
    
        // Crear objeto FormData con los datos del formulario
        var formData = new FormData(document.getElementById("GestionarProductos")); // Reemplaza "tuFormularioID" con el ID de tu formulario

        $.post({
            url: "php/Agregar_producto.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                // Procesar la respuesta JSON
                var nuevoProducto = JSON.parse(response);

                // Construir la URL completa para la imagen
                var urlImagen = nuevoProducto.imagen;

                var nuevaFila = "<tr>" +
                "<th scope='row'>" + nuevoProducto.id + "</th>" +
                "<td scope='col'><img src='" + urlImagen + "' class='img-fluid' alt='" + nuevoProducto.nombre + "' height='50px' width='50px'></td>" +
                "<td scope='col'>" + nuevoProducto.nombre + "</td>" +
                "<td scope='col'>" + nuevoProducto.categoria + "</td>" +
                "<td scope='col'>" + nuevoProducto.stock + "</td>" +
                "<td scope='col'>" + nuevoProducto.precio + "</td>" +
                "</tr>";

                // Agregar la nueva fila al final de la tabla
                $("table tbody").append(nuevaFila);

                // Limpiar el formulario u hacer otras acciones necesarias
                document.getElementById("GestionarProductos").reset(); // Reemplaza "tuFormularioID" con el ID de tu formulario
            },
            error: function (error) {
                console.log("Error al agregar el producto: " + error);
            }
        });

    } else {
        event.preventDefault();
        console.log('Todos los campos deben completarse correctamente.');
    }
}

function mostrarImagen() {
    var input = document.getElementById('imgProducto');
    var preview = document.querySelector('.image-preview');

    // Verificar si se seleccionó un archivo
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Mostrar la imagen en el div de vista previa
            preview.innerHTML = '<img src="' + e.target.result + '" alt="Imagen">';
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        // Limpiar la vista previa si no se selecciona ningún archivo
        preview.innerHTML = '';
    }
}

function actualizarContador() {
    var descripcion = document.getElementById('descripcion');
    var contador = document.getElementById('contadorCaracteres');
    contador.textContent = descripcion.value.length + '/255';
}