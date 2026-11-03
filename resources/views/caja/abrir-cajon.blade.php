{{--
    Abre el cajón del dinero. El cajón va conectado a la impresora de recibos y el driver lo abre
    con cada impresión, así que basta con imprimir casi nada: un punto diminuto (unos 2 mm de
    papel). Una hoja del todo en blanco no sirve: el driver recorta el blanco y puede no imprimir.
    La caja lo carga en un iframe oculto e imprime, igual que el recibo (_impresora-recibos).
--}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <title>Abrir cajón</title>
    <style>
        /* Sin size, por lo mismo que el recibo: arranca arriba de la hoja del driver. */
        @page { margin: 0; }
        html, body { margin: 0; padding: 0; background: white; color: black; }
        .punto { font: 400 5px/1 Arial, Helvetica, sans-serif; }
    </style>
</head>
<body>
    <div class="punto" data-cajon>.</div>
</body>
</html>
