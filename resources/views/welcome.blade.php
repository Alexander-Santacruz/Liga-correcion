<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liga</title>

        <style>
            :root {
                color-scheme: light;
                --bg-start: #0f172a;
                --bg-end: #14532d;
                --panel: rgba(255, 255, 255, 0.1);
                --panel-border: rgba(255, 255, 255, 0.18);
                --text-main: #f8fafc;
                --text-soft: #cbd5e1;
                --accent: #facc15;
                --accent-dark: #ca8a04;
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                min-height: 100vh;
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                background:
                    radial-gradient(circle at top, rgba(250, 204, 21, 0.15), transparent 28%),
                    linear-gradient(145deg, var(--bg-start), var(--bg-end));
                color: var(--text-main);
            }

            .layout {
                width: min(1100px, calc(100% - 2rem));
                margin: 0 auto;
                padding: 3rem 0;
            }

            .hero {
                display: grid;
                gap: 1.5rem;
                align-items: center;
            }

            .tag {
                display: inline-block;
                padding: 0.45rem 0.9rem;
                border-radius: 999px;
                background: rgba(250, 204, 21, 0.16);
                color: var(--accent);
                font-size: 0.95rem;
                letter-spacing: 0.04em;
                text-transform: uppercase;
            }

            h1 {
                margin: 0;
                font-size: clamp(2.4rem, 6vw, 5rem);
                line-height: 0.95;
            }

            .lead {
                max-width: 700px;
                margin: 0;
                font-size: 1.1rem;
                line-height: 1.7;
                color: var(--text-soft);
            }

            .cards {
                display: grid;
                gap: 1rem;
                margin-top: 2rem;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }

            .card {
                padding: 1.3rem;
                border: 1px solid var(--panel-border);
                border-radius: 20px;
                background: var(--panel);
                backdrop-filter: blur(8px);
            }

            .card h2 {
                margin: 0 0 0.6rem;
                font-size: 1.1rem;
            }

            .card p,
            .links a,
            .footnote {
                color: var(--text-soft);
            }

            .links {
                display: flex;
                flex-wrap: wrap;
                gap: 0.75rem;
                margin-top: 2rem;
            }

            .links a {
                padding: 0.85rem 1.1rem;
                border-radius: 14px;
                border: 1px solid rgba(255, 255, 255, 0.12);
                background: rgba(15, 23, 42, 0.45);
                text-decoration: none;
                transition: transform 0.2s ease, border-color 0.2s ease;
            }

            .links a:hover {
                transform: translateY(-2px);
                border-color: rgba(250, 204, 21, 0.65);
            }

            .accent {
                color: var(--accent);
            }

            .footnote {
                margin-top: 2rem;
                font-size: 0.95rem;
            }

            @media (max-width: 640px) {
                .layout {
                    padding: 2rem 0;
                }
            }
        </style>
    </head>
    <body>
        <main class="layout">
            <section class="hero">
                <span class="tag">Proyecto de futbol</span>
                <h1>Panel base para tu <span class="accent">Liga</span></h1>
                <p class="lead">
                    Esta aplicacion expone informacion de equipos, jugadores, partidos, goles y presidentes
                    desde una estructura sencilla construida con Laravel.
                </p>
            </section>

            <section class="cards">
                <article class="card">
                    <h2>Equipos</h2>
                    <p>Consulta plantillas, relaciones con jugadores y partidos registrados.</p>
                </article>
                <article class="card">
                    <h2>Partidos</h2>
                    <p>Revisa enfrentamientos y marcadores almacenados en la base de datos.</p>
                </article>
                <article class="card">
                    <h2>Goles</h2>
                    <p>Explora anotaciones vinculadas a jugadores y encuentros.</p>
                </article>
            </section>

            <nav class="links">
                <a href="{{ url('/teams') }}">Ver equipos</a>
                <a href="{{ url('/players') }}">Ver jugadores</a>
                <a href="{{ url('/games') }}">Ver partidos</a>
                <a href="{{ url('/goals') }}">Ver goles</a>
                <a href="{{ url('/presidents') }}">Ver presidentes</a>
            </nav>

            <p class="footnote">
                Liga ejecutandose sobre Laravel v{{ Illuminate\Foundation\Application::VERSION }} con PHP v{{ PHP_VERSION }}.
            </p>
        </main>
    </body>
</html>
