<?php

namespace Core;

class ConfigController
{
    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlParamentro;
    private string $urlSlugController;

    public function __construct() {
        $urlInput = filter_input(INPUT_GET, "url", FILTER_DEFAULT);

        if (!empty($urlInput)) {
            $this->url = $urlInput;
            echo "URL: {$this->url} <br>";
            $this->limparUrl();
            echo "URL Limpa: {$this->url} <br>";

            $this->urlConjunto = explode("/", $this->url);

            $this->urlController = isset($this->urlConjunto[0]) && $this->urlConjunto[0] !== ""
                ? $this->slugController($this->urlConjunto[0])
                : "Home";

            $this->urlParamentro = $this->urlConjunto[1] ?? "";
        } else {
            $this->urlController = CONTROLLER;
            $this->urlParamentro = "";
        }

        echo "Controller: {$this->urlController} - Paramentro: {$this->urlParamentro}<br>";
    }

    private function limparUrl() {
        // Eliminar tags, espaços e barra final
        $this->url = strip_tags(trim(rtrim($this->url, "/")));

        // Substituir acentos e caracteres especiais
        if (class_exists('Transliterator')) {
            $this->url = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9/] remove; Lower()', $this->url);
        } else {
            // Fallback simples se a extensão intl não estiver disponível
            $this->url = iconv('UTF-8', 'ASCII//TRANSLIT', $this->url);
            $this->url = preg_replace('/[^A-Za-z0-9\/]/', '', $this->url);
            $this->url = strtolower($this->url);
        }
    }

    private function slugController($slugController) {
        $slugController = strtolower($slugController);
        $slugController = str_replace("-", " ", $slugController);
        $slugController = ucwords($slugController);
        return str_replace(" ", "", $slugController);
    }

    public function carregar()
{
    $classe = "\\App\\sts\\Controllers\\" . $this->urlController;
    $ClasseCarregar = new $classe();
    $ClasseCarregar->index();
}

}



