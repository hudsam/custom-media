<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url("https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        th { text-align: center !important; }
        .loading-gif { max-width: 500px; }
        .pre-loader { position: fixed; z-index: 100; top: 0; left: 0; background: #191f26; display: flex; justify-content: center; align-items: center; height: 100%; width: 100%; }
        .pre-loader.hidden { animation: fadeOut 2s; animation-fill-mode: forwards; }
        @keyframes fadeOut { 100% { opacity: 0; visibility: hidden; } }
    </style>
</head>
<body>
