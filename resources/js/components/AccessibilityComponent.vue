<template>
    <section class="container-fluid bg-light" id="accessibility">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a
                    class="nav-link d-md-block py-1 py-sm-2 link-default"
                    href="#main-container"
                    accesskey="1"
                >
                    Ir para o conteúdo
                    <span class="badge bg-default">alt+1</span>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a class="nav-link py-1 py-sm-2 link-default" href="#nav-menu" accesskey="2">
                    Ir para o menu
                    <span class="badge bg-default">alt+2</span>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a class="nav-link py-1 py-sm-2 link-default" href="#search-container" accesskey="3">
                    Ir para a busca
                    <span class="badge bg-default">alt+3</span>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a class="nav-link py-1 py-sm-2 link-default" href="#footer-container" accesskey="4">
                    Ir para o rodapé
                    <span class="badge bg-default">alt+4</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link py-1 py-sm-2 link-default"
                    href="#"
                    accesskey="c"
                    onclick="window.toggleContrast()"
                >
                    Alto Contraste
                    <span class="badge bg-default">alt+C</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link py-1 py-sm-2 link-default"
                    href="#"
                    accesskey="5"
                    onclick="window.changeFont()"
                    onkeydown="window.changeFont()"
                >
                    A+
                    <span class="badge bg-default">alt+5</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link py-1 py-sm-2 link-default"
                    href="#"
                    accesskey="6"
                    onclick="window.changeFont(true)"
                >
                    A-
                    <span class="badge bg-default">alt+6</span>
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link d-md-block py-1 py-sm-2 link-default"
                    href="login"
                >
                    Acessar Administrador
                </a>
            </li>
        </ul>
    </section>
</template>

<script>
    export default {
        name: "accessibility",
    };
</script>

<style scoped>
    #accessibility a {
        font-size: 0.75rem;
    }
</style>

<style>
    .contrast,
    .contrast nav,
    .contrast div,
    .contrast li,
    .contrast ol,
    .contrast header,
    .contrast footer,
    .contrast section,
    .contrast main,
    .contrast aside,
    .contrast article {
        background: black !important;
        color: white !important;
    }

    .contrast h1,
    .contrast h2,
    .contrast h3,
    .contrast h4,
    .contrast h5,
    .contrast h6,
    .contrast p,
    .contrast label,
    .contrast strong,
    .contrast em,
    .contrast cite,
    .contrast q,
    .contrast i,
    .contrast b,
    .contrast u,
    .contrast span {
        color: white !important;
    }

    .contrast a {
        color: yellow !important;
    }

    .contrast button,
    .contrast input[type="button"],
    .contrast input[type="reset"],
    .contrast input[type="submit"] {
        background: black !important;
        color: yellow !important;
        border: 1px solid white !important;
    }
    .contrast img.on-contrast-force-gray {
        filter: grayscale(100%) contrast(120%);
    }

    .contrast img.on-contrast-force-white {
        filter: brightness(0) invert(1);
    }
    .contrast input[type="text"],
    .contrast select,
    .contrast input[type="password"],
    .contrast input[type="url"],
    .contrast input[type="search"],
    .contrast input[type="email"],
    .contrast input[type="tel"],
    .contrast input[type="date"],
    .contrast input[type="month"],
    .contrast input[type="week"],
    .contrast input[type="datetime"],
    .contrast input[type="datetime-local"],
    .contrast textarea,
    .contrast .select2-container--bootstrap4 .select2-selection,
    .contrast input[type="number"] {
        background: black !important;
        border: 1px solid white !important;
        color: white !important;
    }
    .contrast .x-nav-pills,
    .contrast .list-group-item {
        background: #000;
    }
    .contrast .list-group {
        border: 1px solid #fff;
        border-radius: 0.25rem;
    }
    .contrast .nav-tabs .nav-link.active,
    .contrast .nav-tabs .nav-item.show .nav-link {
        background: #008dd0;
    }
    .contrast .table {
        color: yellow;
    }
    .contrast .badge-light {
        color: #000000 !important;
    }
    .contrast .list-group-item {
        border-bottom: 1px solid #fff;
    }
    .contrast .card {
        border: 1px solid #fff;
    }
</style>
