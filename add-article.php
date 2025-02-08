<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
</head>
<body>

    <?php include 'include/nav.php'; ?>

    <h1>Ajouter un article</h1>

    <form action="" method="POST">
        <!-- Champ Titre -->
        <div>
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>
        </div>

        <!-- Champ Image -->
        <div>
            <label for="image">Image :</label>
            <input type="file" id="image" name="image" required>
        </div>

        <!-- Champ Contenu -->
        <div>
            <label for="content">Contenu :</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>

        <!-- Champ Catégorie -->
        <div>
            <label for="categorie">Catégorie :</label>
            <select id="categorie" name="categorie" required>
                <option value="">Sélectionnez une catégorie</option>
                <option value="Technologie">Technologie</option>
                <option value="Santé">Santé</option>
                <option value="Voyage">Voyage</option>
                <option value="Éducation">Éducation</option>
            </select>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" name="submit">Publier l'article</button>
    </form>

    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Style du formulaire */
        form {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        form div {
            margin-bottom: 1.5rem;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555;
        }

        form input[type="text"],
        form input[type="file"],
        form textarea,
        form select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
            transition: border-color 0.3s ease;
        }

        form input[type="text"]:focus,
        form input[type="file"]:focus,
        form textarea:focus,
        form select:focus {
            border-color: #007bff;
            outline: none;
        }

        form textarea {
            resize: vertical;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button[type="submit"]:hover {
            background-color: #0056b3;
        }

      
    </style>

</body>
</html>