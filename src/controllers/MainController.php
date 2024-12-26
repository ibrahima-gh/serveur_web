<?php

class MainController
{
    public function home()
    {
        $this->render('home');
    }

    public function catalogue()
    {
        $this->render('catalogue');
    }

    public function panier()
    {
        $this->render('panier');
    }

    public function connexion()
    {
        $this->render('connexion');
    }

    public function inscription()
    {
        $this->render('inscription');
    }

    public function produit()
    {
        $this->render('produit');
    }
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    private function render($view, $data = [])
    {
        extract($data);
        include __DIR__ . '/../views/partials/header.php';
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            echo "View not found: $view";
        }
        include __DIR__ . '/../views/partials/footer.php';
    }
}
