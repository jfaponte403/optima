<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Investigación de Operaciones</title>

    <link rel="stylesheet" type="text/css" href="public/assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<main class="container py-5">
    <!-- Always visible section -->
    <section class="mb-4">
        <h1 class="display-4 text-center mb-3">Programación Lineal</h1>
        <div class="d-flex justify-content-center">
            <label for="method-selector" class="form-label me-2">Seleccione el método a usar:</label>
            <select id="method-selector" class="form-select w-auto">
                <option value="graphic">Gráfico</option>
                <option value="two-phases">Dos fases</option>
            </select>
        </div>
    </section>

    <!-- Graphical Method Section -->
    <section id="graphic-method" class="method mb-5" style="display: none;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Método Gráfico</h5>
            </div>
            <div class="card-body">
                <?php include './src/views/components/GraphicMethod.php'; ?>
            </div>
        </div>
    </section>

    <!-- Two Phases Method Section -->
    <section id="two-phases-method" class="method mb-5" style="display: none;">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="card-title mb-0">Método Dos Fases</h5>
            </div>
            <div class="card-body">
                <p class="lead">Aquí va la información del método de dos fases.</p>
            </div>
        </div>
    </section>
</main>

<script src="public/assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
