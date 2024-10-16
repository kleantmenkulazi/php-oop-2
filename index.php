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
    public $category;
    // protected $isFood;
    // protected $isToy;
    // protected $isPetBed;

function _construct(string $title,float $price,string $img, Category|null $category = null) {
    $this->title = $title;
    $this->price = $price;
    $this->img = $img;
    $this->setCategory($category);
}

public function getCategory() {
    return $this->category;
}

public function setCategory(Category|null $category) {
    $this->category = $category;
}


 /* public function getType() {
    return $this->type;
} 
public function setType(string $type) {
    $types = [
        'food',
        'tiy',
        'petBed',
    ];
    
    if (in_array($type, $types)) {
        $this->type = $type;
    }
    else {
        $this->type = null;
    }
} */

}


class Food extends Product {
    public $ingredients;
    
    function _construct(string $title,float $price,string $img, Category|null $category = null, string $ingredients = null) {
        parent:: _construct($title, $price, $img, $category);

        $this->ingredients = $ingredients;
    }
}
class Toy extends Product {
    public $materials;

    function _construct(string $title,float $price,string $img, Category|null $category = null, string $materials = null) {
        parent:: _construct($title, $price, $img, $category);

        $this->imaterial = $material;
    }
}
class PetBed extends Product {
    public $size;

    function _construct(string $title,float $price,string $img, Category|null $category = null, string $size = null) {
        parent:: _construct($title, $price, $img, $category);

        $this->size = $size;
    }
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

$ciboPerGatti = new Food(
    'Cibo per gatti',
    6.99,
    'https://i5.walmartimages.com/seo/Meow-Mix-Original-Choice-Dry-Cat-Food-30-Pounds_c6ce8dad-9f70-4368-a3a0-64d1c9730fd6.6e4cf26663f507ba903d633a8e44cb08.jpeg'
    $gatti,
    'Manzo, piselli, carote, sale, olio, acqua'
);
var_dump($ciboPerGatti);

$giocoPerGatti = new Toy(
    'Gioco per gatti',
    2.99,
    'https://m.media-amazon.com/images/I/51vCVq-lnCL._AC_UF894,1000_QL80_.jpg'
    $gatti,
    'Plastica'
);
var_dump($giocoPerGatti);

$cucciaPerGatti = new PetBed(
    'Cuccia per gatti',
    14.99,
    'https://m.media-amazon.com/images/I/71fIDIyxppL._AC_UF1000,1000_QL80_.jpg'
    $gatti,
    'medium'
);
var_dump($cucciaPerGatti);

$products = [
    $prodottoPerGatti,
    $ciboPerGatti,
    $giocoPerGatti,
    $cucciaPerGatti,
    $prodottoPerCani,
    $ciboPerCani,
    $giocoPerCani,
    $cucciaPerCani,
    

];





















    $columnsNumber = 4;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="row g-3">
                    <?php
                        foreach ($product as $products) {
                    ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo $product->img; ?>" class="card-img-top" alt="<?php echo $product->title; ?>">
                                <h2>
                                    <?php echo $product->title; ?>
                                </h2>
                                <h6>
                                <i class="fa-solid fa-tag"></i>
                                <?php echo $product->getCategory()->icon; ?>
                                <?php echo $product->getCategory()->name; ?>
                                </h6>
                                <h5>
                                <?php echo number_format ($product->price, 2, ',', '.'); ?>
                                </h5>
                                <hr>
                                <h3>
                                    Tipo di articolo: 
                                    <?php echo get_class($product);
                                    switch($productClass) {
                                        case 'Food';
                                            echo 'Cibo';
                                            break;
                                        case 'Toy';
                                            echo 'Gioco';
                                            break;
                                        case 'PetBed';
                                            echo 'Cuccia';
                                            break;
                                        default;
                                            echo 'Prodotto generico';
                                            break;
                                    }
                                    
                                    
                                    
                                    
                                    ?>
                                </h3>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </main>

    </body>
</html>