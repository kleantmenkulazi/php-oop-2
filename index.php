<?php
class Category {
    public $name;
    public $icon;

    function _construct(string $name,string $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
}


class Product {
    public $title;
    public $price;
    public $img;
    protected $category;

function _construct(string $title,float $price,string $img, Category|null $category = null) {
    $this->title = $title;
    $this->price = $price;
    $this->img = $img;
$this->setCategory($category);
}

public function getCategory() {
    return $this->category;
}

/* public function setCategory(Category|null $category) {
    if (
        is_string($category)
        &&
        in_array($category,$categories)
    ) {
        $this->category = $category;
    }
    else {
        $this->category = null;
    } 
} */
}
$cani = new Category('Cani', '🐶');
$gatti = new Category('Gatti', '🐈');

var_dump($cani);
var_dump($gatti);

$prodottoPerGatti = new Product(
    'Prodotto generico per gatti',
    17.99,
    'https://cdn.britannica.com/70/234870-050-D4D024BB/Orange-colored-cat-yawns-displaying-teeth.jpg'
    $gatti
);
var_dump($prodottoPerGatti);




















    $columnsNumber = 4;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <header class="py-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>
                            Template PHP
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <?php
                        for ($i = 0; $i < $columnsNumber; $i++) {
                    ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            Colonna <?php echo $i + 1; ?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>

    </body>
</html>