<form class="container mt-4">
    <h2 class="mb-4">Ingrese la función objetivo</h2>

    <div class="mb-3">
        <label class="form-label" for="tipo">Tipo</label>
        <select id="tipo" class="form-select">
            <option>max</option>
            <option>min</option>
        </select>
    </div>

    <div class="mb-3">
        <div class="d-flex align-items-center">
            <input type="text" class="form-control me-2" placeholder="Coeficiente X1">
            <label class="form-label me-2">X1</label>

            <input type="text" class="form-control me-2" placeholder="Coeficiente X2">
            <label class="form-label me-2">X2</label>

            <label class="form-label me-2">=</label>
            <input type="text" class="form-control" placeholder="12300">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label" for="numero-restricciones">Ingrese el número de restricciones</label>
        <input type="number" id="numero-restricciones" class="form-control" onchange="generarRestricciones()" />
    </div>

    <div id="restricciones-container" class="mb-3"></div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<script>
    function generarRestricciones() {
        const contenedor = document.getElementById('restricciones-container');
        contenedor.innerHTML = '';
        const cantidad = parseInt(document.getElementById('numero-restricciones').value) || 0;

        for (let i = 1; i <= cantidad; i++) {
            const div = document.createElement('div');
            div.classList.add('mb-3');
            div.innerHTML = `
                <div class="d-flex align-items-center">
                    <label class="form-label me-2">Restricción ${i}:</label>
                    <input type="text" class="form-control me-2" placeholder="Coeficiente X1" />
                    <label class="form-label me-2">X1</label>

                    <input type="text" class="form-control me-2" placeholder="Coeficiente X2" />
                    <label class="form-label me-2">X2</label>
                    <select class="form-select me-2">
                        <option>=</option>
                        <option>&le;</option>
                        <option>&ge;</option>
                    </select>
                    <input type="text" class="form-control" placeholder="Constante" />
                </div>
            `;
            contenedor.appendChild(div);
        }
    }
</script>
