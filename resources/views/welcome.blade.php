<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Master web</title>
  </head>
  <body>
    <script type="text/javascript">
      ruta = "{{route('formulario')}}";
    </script>

    <h1>Bienvenidos a su clase</h1>
    <hr>
    <form action="{{ route('formulario') }}" method="post">
      <label for="name">Nombre</label>
      <input type="text" name="name">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
