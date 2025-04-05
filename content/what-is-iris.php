<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iris-Go eBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2>What is Iris</h2>
    <p>
        Iris is a free, open-source web framework for<a href="https://go.dev/" target="_blank"> Go</a>, created by <a
                href="https://twitter.com/MakisMaropoulos" target="_blank">Gerasimos Maropoulos</a>. It enables back-end
        developers to build modern web applications with high performance and low overhead.
    </p>
    <p>
        Iris is the only Go module that offers <strong>first-class</strong> support for the model-view-controller <a
                href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller" target="_blank">MVC</a>
        architectural pattern, which helps to organize the code and separate the concerns of different components.
    </p>
    <p>
        Iris can also be used as a web port for
        <a href="https://grpc.io/" target="_blank">gRPC,</a> allowing developers to expose their gRPC services as
        REST
        APIs.
    </p>
    <p>
        The source code of Iris is hosted on
        <a href="https://github.com/kataras/iris" target="_blank"> GitHub</a>
        and licensed under the terms of<a href="https://opensource.org/license/bsd-3-clause/" target="_blank"> BSD
            3-clause License</a>, like the <a href="https://github.com/golang/go" target="_blank">Go</a> project itself.
    </p>
    <br/>
    <b>Installation<br/></b>Iris is a cross-platform so ware.<br/>
    The only requirement is the <a href="https://go.dev/dl/" target="_blank">Go Programming Language</a>, version 1.20
    and above.<br/>
    <b>Install</b><br/>
    $ go get github.com/kataras/iris/v12@latest<br/>
    Or edit your project's go.mod file.<br/>
    module your_project_name <br/>
    go 1.20 <br/>
    require ( <br/> github.com/kataras/iris/v12 v12.2.0 <br/>)<br/>
    $ go build<br/>
    <b>Troubleshooting</b><br/>
    <a href="https://github.com/golang/go/wiki/Modules#are-there-always-on-module-repositories-and-enterprise-proxies"
       target="_blank">If
        you get a network error during installation please make sure you set a valid GOPROXY
        environment<br/>variable.</a>
    <br/>
    go env -w GOPROXY=direct<br/>
    Perform a clean of your go modules cache if none of the above worked:<br/>
    <pre><code>go clean --modcache</code></pre>
    <br/>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>
</html>