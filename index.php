<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mihguel Da Silva Santos Tavares De Araujo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/default.css">
    <link rel="stylesheet" href="style/notebook-index.css">
    <title>Main Page</title>
</head>
<body>
    <?php
    function sublist($path) {
        $dir = scandir($path);
        for($a = 0; $a < count($dir); $a++) {
            if (preg_match("/.*.php$/", $dir[$a])) {
                $pattern = '/(\d+)_(\w+)\.(\w+)/i';
                $replacement = "$2";
                $name = preg_replace($pattern, $replacement, $dir[$a]);
                $title = ucfirst($name);
                $href = "$path/$dir[$a]";
                echo "
                <li class='nivel-dois' name='php-basico' id='php-basico' style='background-color:rgba(1,1,1,.7);'>
                <a href='$href' style='color:black;text-decoration:none;display:block;'>$title</a>
                </li>";
            };
        };
    };
    ?>
    <header>
        <section>

        </section>
        <section id="centro" class="menu-header" name="menu">
            <nav id="menu" name="conteudo" class="nivel-um">
                <ul class="nivel-um">
                    <li class="nivel-um" name="php-basico" id="php-basico">PHP Básico
                        <ul class="nivel-dois">
                            <?php
                            sublist("page/01_php_basico");
                            ?>
                        </ul>
                    </li>
                    <li class="nivel-um" name="php-avancado" id="php-avancado">PHP Avançado

                    </li>
                </ul>
            </nav>
        </section>
        <section>

        </section>
    </header>
    <main>

    </main>
    <footer>

    </footer>
    <script>
        let liNivelDois = document.querySelectorAll("li.nivel-dois");
        liNivelDois.forEach(function(element, index) {
            element.addEventListener("mouseover", function(e) {
                e.target.style.backgroundColor = "rgba(255,255,255,.1)";
            });
            element.addEventListener("mouseout", function(e) {
                e.target.style.backgroundColor = "rgba(1,1,1,.1)";
            });
        });
    </script>
</body>
</html>