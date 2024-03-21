<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../php/config.php' ?>

    <link rel="stylesheet" href="../css/styles.css">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-gray-200 shadow h-16 flex items-center"> <!-- h-16 définit la hauteur du header -->

        <nav class="container mx-auto px-6 py-3 flex justify-between w-full">
            <!-- Logo et nom de la marque -->
            <a href="/" class="text-2xl font-bold text-black no-underline">
                <?php echo $brandName; ?>
            </a>
            <!-- Navigation -->
            <div class="flex items-center space-x-6">
                <a href="projects.php" class="text-xl font-bold text-black transition-colors duration-300 link-underline group">
                    Mes Projets
                </a>
                <a href="cv.php" class="text-xl font-bold text-black transition-colors duration-300 link-underline group">
                    Curriculum Vitae
                </a>
                <a href="veilleTechno.php" class="text-xl font-bold text-black transition-colors duration-300 link-underline group">
                    Veille Technologique
                </a>
            </div>
        </nav>

    </header>
    <!-- Séparateur noir -->
    <div class="h-1 bg-black"></div>

    <!-- Le reste du contenu de votre page ici -->

</body>
</html>
