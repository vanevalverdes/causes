<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mi página Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .header {
      background-color: #28a745;
      color: #fff;
      padding: 20px;
    }
    .footer {
      background-color: #28a745;
      color: #fff;
      padding: 20px;
    }
    .boxed-layout {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="boxed-layout">
      <h1>Encabezado</h1>
    </div>
  </div>
  <div class="boxed-layout">
    <h2>Contenido de la página</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec convallis magna. In vel tincidunt erat. Morbi suscipit, justo eget bibendum commodo, erat lacus rutrum enim, non pharetra risus nunc eu purus. Nulla facilisi. Integer interdum ultricies semper. Sed luctus sollicitudin fermentum. Duis elementum tristique lectus, ut dignissim metus convallis in. Sed porttitor tortor vitae lorem pharetra dapibus.</p>
  </div>
  <div class="footer">
    <div class="boxed-layout">
      <p>Pie de página</p>
    </div>
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
