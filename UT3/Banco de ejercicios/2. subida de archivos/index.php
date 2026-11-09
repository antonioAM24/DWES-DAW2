<?php

declare(strict_types=1);

$esPost = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';

if ($esPost) {
    $titulo = $_POST['titulo'] ??
        $archivo = $_FILES['portada'] ?? null;
    $estructuraValida = is_array($archivo)
        && isset($archivo['error'], $archivo['size'])
        && is_int($archivo['error'])
        && is_int($archivo['size'])
        && isset($archivo['tmp_name'])
        && is_string($archivo['tmp_name']);
    if ($archivo !== null && !$estructuraValida) {
        $errores['portada'] = 'Entrada no válida.';
    }
    if ($archivo === null) {
        return ['error' => null, 'archivo' => null];
    }
    if (!$estructuraValida) {
        return ['error' => 'Entrada no válida.'];
    }
    if ($archivo['error'] === UPLOAD_ERR_NO_FILE) {
        return ['error' => null, 'archivo' => null];
    }
    if ($archivo['error'] === UPLOAD_ERR_INI_SIZE) {
        $errores['portada'] = 'Superó el tamaño';
    }
    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        return ['error' => 'Falló la recepción.'];
    }


$maxBytes = 2 * 1024 * 1024;
if (
    $archivo['size'] <= 0
    || $archivo['size'] > $maxBytes
) {
    $errores['portada'] = 'Entre 1 byte y 2 MiB.';
} else {
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($archivo['tmp_name']);

    $permitidos = [
        'image/jpeg' => 'jpg',
        'image/png' => 'png',
        'image/webp' => 'webp',
    ];
    if ($mime === false || !isset($permitidos[$mime])) {
        $errores['portada'] = 'Formato no permitido.';
    } else {
        $extension = $permitidos[$mime];
    
    try {
        $nombre = bin2hex(random_bytes(16))
            . '.' . $extension;
    } catch (Random\RandomException) {
        $errores['portada'] = 'No se pudo preparar el archivo.';
    
    $directorio = __DIR__ . '/../storage/portadas';
    $destino = $directorio . '/' . $nombre;
    if (!is_dir($directorio) || !is_writable(
        $directorio
    )) {
        $errores['portada'] =
            'Almacenamiento no disponible.';
    }
    if (file_exists($destino)) {
        $errores['portada'] =
            'Nombre ocupado; vuelve a enviar.';
    }
}
}
}
}
?>

<form method="post" enctype="multipart/form-data">
    <input name="titulo">
    <input name="portada" type="file" accept="image/jpeg,image/png,image/webp">
    <button type="submit">Guardar</button>
</form>